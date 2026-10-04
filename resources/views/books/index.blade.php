@extends('layouts.app')

@section('title', 'Daftar Buku')

@section('content')
<h1>Daftar Buku</h1>
<ul>
    @foreach ($books as $book)
        <li>
            <a href="/books/{{ $book['id'] }}">{{ $book['title'] }}</a> - {{ $book['author'] }}
        </li>
    @endforeach
</ul>
@endsection