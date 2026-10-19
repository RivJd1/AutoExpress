<?php

namespace App\Http\Controllers;

use App\Support\Flota;

class PaginaController extends Controller
{
    public function inicio()
    {
        return view('home.index', [
            'destacados' => Flota::destacados(),
            'categorias' => config('autorenta.categorias'),
            'rutas'      => config('autorenta.rutas'),
        ]);
    }

    public function vehiculos()
    {
        return view('vehiculos.index', ['grupos' => Flota::agrupada()]);
    }

    public function servicios()
    {
        return view('servicios.index');
    }

    public function requisitos()
    {
        return view('requisitos.index');
    }

    public function nosotros()
    {
        return view('nosotros.index');
    }
}
