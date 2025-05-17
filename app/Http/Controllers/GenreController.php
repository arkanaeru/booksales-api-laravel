<?php

namespace App\Http\Controllers;

use App\Models\Genre;

class GenreController extends Controller
{
    public function index()
    {
        $genres = Genre::all();
        return response()->json([
            "succes" => true, 
            "message" => "Get all resources",
            "data" => $genres
        ], 200);
    }
}
