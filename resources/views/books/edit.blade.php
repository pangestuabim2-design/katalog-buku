@extends('layouts.app')
@section('content')
<h1>Edit Buku: {{ $book->title }}</h1>
<form action="{{ route('books.update', $book) }}" method="POST">
    @csrf
    @method('PUT')
    @include('books._form')
    <br><button type="submit">Update</button>
</form>
@endsection