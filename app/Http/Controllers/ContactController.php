<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function create(Request $request)
    {
        return view('contacto.index', [
            'categories' => Category::with('vehicles')->get(),   // llena el select de vehículos
            'selected'   => $request->query('vehicle_id'),       // viene de "Consultar por este vehículo"
        ]);
    }

    public function store(Request $request)
    {
        $datos = $request->validate([
            'nombre_completo' => ['required', 'string', 'max:100'],
            'telefono'        => ['required', 'string', 'max:25'],
            'correo'          => ['nullable', 'email', 'max:255'],
            'vehicle_id'      => ['nullable', 'exists:vehicles,id'],
            'fecha_recogida'  => ['nullable', 'date', 'after_or_equal:today'],
            'fecha_entrega'   => ['nullable', 'date', 'after_or_equal:fecha_recogida'],
            'observacion'     => ['nullable', 'string', 'max:1000'],
        ], [
            'required'                      => 'Este dato es necesario para poder responderle.',
            'email'                         => 'Escriba un correo válido, por ejemplo nombre@correo.com.',
            'max'                           => 'El texto es demasiado largo.',
            'date'                          => 'Escriba una fecha válida.',
            'exists'                        => 'Ese vehículo ya no está disponible. Elija otro.',
            'fecha_recogida.after_or_equal' => 'La fecha de recogida no puede ser anterior a hoy.',
            'fecha_entrega.after_or_equal'  => 'La entrega debe ser el mismo día de la recogida o después.',
        ]);

        Contact::create($datos);   // estado queda en "nueva" por defecto

        return redirect('/contacto')->with('exito', $datos['nombre_completo']);
    }
}
