<?php

namespace App\Http\Controllers;

use App\Models\Categoria;
use App\Models\Ruta;
use App\Models\Vehiculo;

class HomeController extends Controller
{
    public function index()
    {
        return view('home.index', [
            'destacados' => Vehiculo::destacados(),
            'categorias' => Categoria::todas(),
            'rutas'      => Ruta::todas(),
        ]);
    }
}
