<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BookController;

Route::get('/', function () {
    return view('welcome');
});

Route::view('/profil-kelas', 'profil-kelas')->name('profil-kelas');
Route::view('/bantuan', 'bantuan')->name('bantuan');

Route::get('/books', [BookController::class, 'index'])->name('books.index');
Route::get('/books/{id}', [BookController::class, 'show'])->whereNumber('id')->name('books.show');

