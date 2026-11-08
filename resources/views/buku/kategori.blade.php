<h1>Kategori: {{ $nama ?? 'Semua kategori' }}</h1>

@if (count($daftarBuku) === 0)
    <p>Belum ada buku pada kategori ini.</p>
@else
    <p>Total buku: {{ count($daftarBuku) }}</p>
    <ul>
        @foreach ($daftarBuku as $buku)
            <li>{{ $buku['judul'] }} ({{ $buku['kategori'] }})</li>
        @endforeach
    </ul>
@endif

<a href="{{ route('buku.index') }}">Kembali ke daftar buku</a>