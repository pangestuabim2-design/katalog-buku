@extends('layouts.app')
@section('title', $book['title'])
@section('content')
<h1>{{ $book['title'] }}</h1>
<p><strong>Penulis:</strong> {{ $book['author'] }}</p>
<p><strong>Tahun:</strong> {{ $book['year'] }}</p>
<p><strong>ID:</strong> {{ $book['id'] }}</p>
<a href="{{ route('books.index') }}">Kembali ke Katalog</a>
@endsection