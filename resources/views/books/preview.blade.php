@extends('layouts.app')
@section('title', 'Preview - ' . $book->title)
@section('content')
<h1>Preview: {{ $book->title }}</h1>
<p>{{ $book->author }} - {{ $book->publisher }} ({{ $book->published_year }})</p>
<p>ISBN: {{ $book->isbn }} | Rp {{ number_format($book->price, 0, ',', '.') }} | Stok: {{ $book->stock }} | Tahun: {{ $book->published_year }}</p>
<p>Deskripsi: {{ $book->description }}</p>
<a href="{{ route('books.index') }}">Kembali</a>
@endsection