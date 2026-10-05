@extends('layouts.app')
@section('title', 'Preview ' . $book->title)
@section('content')
<h1>Preview: {{ $book->title }}</h1>
<p>{{ $book->author }} - {{ $book->publisher }}</p>
<p>ISBN: {{ $book->isbn }} | Rp {{ number_format($book->price, 0, ',', '.') }}</p>
<p>Ini adalah halaman preview buku...</p>
<a href="{{ route('books.index') }}">Kembali</a>
@endsection