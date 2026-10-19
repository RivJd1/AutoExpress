<?php

namespace App\Http\Controllers;

use App\Models\Categoria;

class VehiculoController extends Controller
{
    public function index()
    {
        return view('vehiculos.index', ['grupos' => Categoria::todas()]);
    }
}
