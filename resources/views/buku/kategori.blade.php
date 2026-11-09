@extends('layouts.app')
@section('title', 'Kategori Buku')

@section('content')
    <h1>Kategori: {{ $nama ?? 'Semua kategori' }}</h1>

    <div class="chips">
        <a class="chip {{ $nama === null ? 'active' : '' }}" href="{{ route('buku.kategori') }}">Semua</a>
        <a class="chip {{ strtolower($nama ?? '') === 'pemrograman' ? 'active' : '' }}" href="{{ route('buku.kategori', 'pemrograman') }}">Pemrograman</a>
        <a class="chip {{ strtolower($nama ?? '') === 'novel' ? 'active' : '' }}" href="{{ route('buku.kategori', 'novel') }}">Novel</a>
    </div>

    @if (count($daftarBuku) === 0)
        <p class="empty">Belum ada buku pada kategori ini.</p>
    @else
        <p class="muted">Total buku: {{ count($daftarBuku) }}</p>
        <ul class="list">
            @foreach ($daftarBuku as $buku)
                <li class="row">
                    <span>{{ $buku['judul'] }}</span>
                    <span class="badge">{{ $buku['kategori'] }}</span>
                </li>
            @endforeach
        </ul>
    @endif
@endsection