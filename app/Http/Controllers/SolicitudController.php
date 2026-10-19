<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreSolicitudRequest;
use App\Models\Categoria;
use App\Models\Solicitud;

class SolicitudController extends Controller
{
    public function create()
    {
        return view('solicitud.index', ['grupos' => Categoria::todas()]);
    }

    public function store(StoreSolicitudRequest $request)
    {
        // Campo trampa para bots: una persona nunca lo ve ni lo llena.
        if ($request->filled('sitio_web')) {
            return redirect()->route('solicitud')->with('enviado', 'Gracias.');
        }

        $solicitud = Solicitud::crear($request->validated());

        return redirect()->route('solicitud')->with('enviado', $solicitud->nombre);
    }
}
