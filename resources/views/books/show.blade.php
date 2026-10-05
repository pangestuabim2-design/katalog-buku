@extends('layouts.app')
@section('title', $book->title)
@section('content')
<h1>{{ $book->title }}</h1>
<p>ISBN: {{ $book->isbn }}</p>
<p>Penulis: {{ $book->author }}</p>
<p>Penerbit: {{ $book->publisher }} ({{ $book->year }})</p>
<p>Harga: Rp {{ number_format($book->price, 0, ',', '.') }}</p>
<p>Stok: {{ $book->stock }}</p>
<a href="{{ route('books.index') }}">Kembali</a>
@endsection