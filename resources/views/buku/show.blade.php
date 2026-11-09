@extends('layouts.app')
@section('title', 'Detail Buku')

@section('content')
    <a class="back" href="{{ route('buku.index') }}">← Kembali ke daftar</a>
    <h1>Detail Buku</h1>
    <div class="card">
        <p class="label">ID buku</p>
        <p class="value">{{ $id }}</p>
    </div>
@endsection