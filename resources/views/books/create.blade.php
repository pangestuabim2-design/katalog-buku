@extends('layouts.app')
@section('content')
<h1>Tambah Buku</h1>
<form action="{{ route('books.store') }}" method="POST">
    @csrf
    @include('books._form')
    <br><button type="submit">Simpan</button>
</form>
@endsection