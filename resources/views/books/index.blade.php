@extends('layouts.app')

@section('title', 'Data Buku')

@section('content')
<h1>Data Buku</h1>

<ul>
  @forelse ($books as $book)
    <li style="margin-bottom:15px; border:1px solid #ddd; padding:10px; border-radius:8px;">
      <a href="{{ route('books.show', $book->id) }}">
        <strong>{{ $book->title }}</strong>
      </a>
      <br>
      ISBN: {{ $book->isbn }} <br>
      {{ $book->author }} ({{ $book->year }}) - {{ $book->publisher }} <br>
      Harga: Rp {{ number_format($book->price, 0, ',', '.') }} | Stok: {{ $book->stock }}

      @if ($book->year == date('Y'))
        <span style="background:green;color:white;padding:2px 6px;border-radius:4px;font-size:12px">Terbaru</span>
      @endif
      <a href="{{ route('books.preview', $book->id) }}" style="margin-left:8px">[Preview]</a>
    </li>
  @empty
    <li>Tidak ada buku.</li>
  @endforelse
</ul>
@endsection