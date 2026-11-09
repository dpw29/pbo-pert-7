<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title', 'Portal Buku')</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body>
    <header class="topbar">
        <div class="container topbar-inner">
            <a href="{{ route('buku.index') }}" class="brand"><span class="dot"></span>Portal Buku</a>
            <nav>
                <a href="{{ route('buku.index') }}">Buku</a>
                <a href="{{ route('buku.kategori') }}">Kategori</a>
            </nav>
        </div>
    </header>

    <main class="container">
        @yield('content')
    </main>

    <footer class="footer">
        <div class="container">PBO &middot; Pertemuan 7</div>
    </footer>
</body>
</html>