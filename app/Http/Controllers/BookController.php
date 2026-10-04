<?php

namespace App\Http\Controllers;

use Illuminate\View\View;

class BookController extends Controller
{
    public function index(): View
    {
        $books = [
            ['id' => 1, 'title' => 'Pemrograman Web', 'author' => 'Muhammad Abim'],
            ['id' => 2, 'title' => 'Basis Data Terapan', 'author' => 'Abim Mid'],
            ['id' => 3, 'title' => 'Struktur Data', 'author' => 'Abim Gg'],
        ];

        return view('books.index', compact('books'));
    }

    public function show(int $id): View
    {
        return view('books.show', ['id' => $id]);
    }
}