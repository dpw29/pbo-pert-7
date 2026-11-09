@extends('layouts.app')
@section('title', 'Daftar Buku')

@section('content')
    <h1>Daftar Buku</h1>
    <ul class="list">
        @foreach ($daftarBuku as $buku)
            <li>
                <a href="{{ route('buku.show', $buku['id']) }}">
                    <span>{{ $buku['judul'] }}</span>
                    <span class="arrow">→</span>
                </a>
            </li>
        @endforeach
    </ul>
@endsection