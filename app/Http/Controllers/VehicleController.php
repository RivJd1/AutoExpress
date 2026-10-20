<?php

namespace App\Http\Controllers;

use App\Models\Category;

class VehicleController extends Controller
{
    public function index()
    {
        return view('vehiculos.index', [
            'categories' => Category::with('vehicles')->get(),
        ]);
    }
}
