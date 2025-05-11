<?php

use App\Http\Controllers\AuthorController;
use App\Http\Controllers\BookController;
use App\Http\Controllers\GenreController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route:: get('/books',[BookController::class, 'index']);

// slice books ini ya buat ngarahin get httpnya itu

Route::get('/authors', [AuthorController::class, 'index']);
Route::get('/genres', [GenreController::class, 'index']);


// view books jika tidak muncul, hrs bkin view baru di resources