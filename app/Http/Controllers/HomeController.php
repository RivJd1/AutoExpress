<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Place;

class HomeController extends Controller
{
    public function index()
    {
        $categories = Category::with('vehicles')->get();

        $featured = $categories->map(fn ($category) => $category->vehicles->first())->filter();

        return view('home.index', [
            'categories' => $categories,
            'featured'   => $featured,
            'places'     => Place::all(),
        ]);
    }
}
