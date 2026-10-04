<!DOCTYPE html>
<html>
<head><title>Daftar Buku</title></head>
<body>
    <h1>Daftar Buku</h1>
    <ul>
        @foreach($books as $book)
            <li>
                <a href="{{ route('books.show', $book['id']) }}">
                    {{ $book['title'] }} - {{ $book['author'] }}
                </a>
            </li>
        @endforeach
    </ul>
</body>
</html>