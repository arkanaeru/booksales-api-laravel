<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Book;

class BookController extends Controller
{
    public function index()
    {
        // Ambil semua data buku beserta nama author-nya
        $books = Book::with('author')->get();

        return response()->json([
            "succes" => true, 
            "message" => "Get all resources",
            "data" => $books
        ], 200);
    }
}
