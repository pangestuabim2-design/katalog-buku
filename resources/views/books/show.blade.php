@extends('layouts.app')
@section('content')
<h1>Detail Buku</h1>
<p><b>Judul:</b> {{ $book->title }}</p>
<p><b>Penulis:</b> {{ $book->author }}</p>
<p><b>ISBN:</b> {{ $book->isbn ?? '-' }}</p>
<p><b>Penerbit:</b> {{ $book->publisher ?? '-' }}</p>
<p><b>Tahun:</b> {{ $book->published_year ?? '-' }}</p>
<p><b>Lokasi:</b> {{ $book->location }}</p>
<p><b>Stok:</b> {{ $book->stock }}</p>
<p><b>Harga:</b> Rp {{ number_format($book->price, 0, ',', '.') }}</p>
<p><b>Deskripsi:</b> {{ $book->description }}</p>
<br>
<a href="{{ route('books.index') }}">Kembali</a> | 
<a href="{{ route('books.edit', $book) }}">Edit</a>
@endsection