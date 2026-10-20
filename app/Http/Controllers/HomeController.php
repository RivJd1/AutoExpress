<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Place;

class HomeController extends Controller
{
    public function index()
    {
        // Categorías con sus vehículos ya cargados (with evita una consulta por categoría)
        $categories = Category::with('vehicles')->get();

        // Un vehículo de cada categoría para la sección "Parte de nuestra flota"
        $featured = $categories->map(fn ($category) => $category->vehicles->first())->filter();

        return view('home.index', [
            'categories' => $categories,
            'featured'   => $featured,
            'places'     => Place::all(),
        ]);
    }
}
