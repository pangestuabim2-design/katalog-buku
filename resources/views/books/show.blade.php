@extends('layouts.app')

@section('title', $book['title'])

@section('content')
<h1>Detail Buku</h1>
<h2>{{ $book['title'] }}</h2>
<p>Penulis: {{ $book['author'] }}</p>
<p>ID: {{ $book['id'] }}</p>
<a href="{{ route('books.index') }}">Kembali ke Daftar</a>
@endsection