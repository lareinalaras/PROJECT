<?php

use \App\Http\Controllers\BookController;
use Illuminate\Support\Facades\View;
use Illuminate\Support\Facades\Route;

Route::get('/', [BookController::class, 'body']);
Route::get('/detail/{id}', [BookController::class, 'detail_buku']);
Route::get('/book_category/{id}', [BookController::class, 'book_category']);
Route::get('/publisher', [BookController::class, 'publisher']);

Route::get('/contact', function () {
    return view('contact');
});
