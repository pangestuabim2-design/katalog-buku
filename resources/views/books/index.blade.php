@extends('layouts.app')

@section('content')
@if(session('success')) <div style="background:#d4edda;padding:10px">{{ session('success') }}</div> @endif
@if(session('error')) <div style="background:#f8d7da;padding:10px">{{ session('error') }}</div> @endif

<h1>Daftar Buku ({{ $books->total() }})</h1>

{{-- SEARCH FORM - WAJIB PERTEMUAN 7 --}}
<form method="GET" action="{{ route('books.index') }}" style="margin-bottom:15px">
    <input type="search" name="q" value="{{ $keyword ?? '' }}" placeholder="Cari judul, penulis, atau ISBN">
    <button type="submit">Cari</button>
    <a href="{{ route('books.index') }}">Reset</a>
</form>

<a href="{{ route('books.create') }}">+ Tambah Buku Baru</a>

<table border="1" cellpadding="8" cellspacing="0" style="margin-top:10px;width:100%">
    <tr>
        <th>ID</th><th>Judul</th><th>Penulis</th><th>Stok</th><th>Aksi</th>
    </tr>
    @forelse($books as $book)
    <tr>
        <td>{{ $book->id }}</td>
        <td>{{ $book->title }}</td>
        <td>{{ $book->author }}</td>
        <td>{{ $book->stock }}</td>
        <td>
            <a href="{{ route('books.show', $book) }}">Detail</a> |
            <a href="{{ route('books.edit', $book) }}">Edit</a> |
            @if($book->stock <= 20)
                <form action="{{ route('books.destroy', $book) }}" method="POST" style="display:inline" onsubmit="return confirm('Yakin hapus?')">
                    @csrf @method('DELETE')
                    <button type="submit">Hapus</button>
                </form>
            @else
                <small style="color:gray">(Stok >20 tidak bisa dihapus)</small>
            @endif
        </td>
    </tr>
    @empty
    <tr><td colspan="5">Tidak ada data.</td></tr>
    @endforelse
</table>

{{-- PAGINATION - JANGAN LUPA withQueryString SUDAH DI CONTROLLER --}}
<div style="margin-top:15px">
    {{ $books->links() }}
</div>
@endsection