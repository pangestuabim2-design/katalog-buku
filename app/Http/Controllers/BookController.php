<?php

namespace App\Http\Controllers;

use Illuminate\View\View;

class BookController extends Controller
{
    public function index(): View
    {
        $books = [
            ['id' => 1, 'title' => 'Pemrograman Web', 'author' => 'Muhammad Abim', 'year' => '2024'],
            ['id' => 2, 'title' => 'Basis Data Terapan', 'author' => 'Abim Mid', 'year' => '2025'],
            ['id' => 3, 'title' => 'Struktur Data', 'author' => 'Abim Gg', 'year' => '2026'],
        ];

        return view('books.index', compact('books'));
    }

    public function show(int $id): View
    {
        $books = [
            ['id' => 1, 'title' => 'Pemrograman Web', 'author' => 'Muhammad Abim', 'year' => '2024'],
            ['id' => 2, 'title' => 'Basis Data Terapan', 'author' => 'Abim Mid', 'year' => '2025'],
            ['id' => 3, 'title' => 'Struktur Data', 'author' => 'Abim Gg', 'year' => '2026'],
        ];

        $book = collect($books)->firstWhere('id', $id);

        abort_if(!$book, 404);

        return view('books.show', compact('book'));
    }
}