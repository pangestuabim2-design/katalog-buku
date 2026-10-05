<?php

namespace App\Http\Controllers;

use App\Models\Book;
use Illuminate\View\View;

class BookController extends Controller
{
    public function index(): View
    {
        $books = Book::all();
        return view('books.index', compact('books'));
    }

    public function show(int $id): View
    {
        $book = Book::findOrFail($id);
        return view('books.show', compact('book'));
    }

    public function preview(int $id): View
    {
        $book = Book::findOrFail($id);
        return view('books.preview', compact('book'));
    }
}