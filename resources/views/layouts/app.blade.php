<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Katalog Buku')</title>
</head>
<body>
    <nav>
        <a href="/books">Katalog Buku</a>
    </nav>
    <hr>
    <main>
        @yield('content')
    </main>
</body>
</html>