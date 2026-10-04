<?php

namespace App\Http\Controllers;

use Illuminate\View\View;

class BookController extends Controller
{
    private $books = [
        ['id' => 1, 'title' => 'Dasar Pemrograman Web', 'author' => 'Ayu Pratama'],
        ['id' => 2, 'title' => 'Belajar Laravel 11', 'author' => 'Budi Santoso'],
        ['id' => 3, 'title' => 'Algoritma dan Struktur Data', 'author' => 'Citra Lestari'],
    ];

    public function index(): View
    {
        $books = $this->books;
        return view('books.index', compact('books'));
    }

    public function show(int $id): View
    {
        $book = collect($this->books)->firstWhere('id', $id);

        if (!$book) {
            abort(404, 'Buku tidak ditemukan');
        }

        return view('books.show', compact('book'));
    }
}