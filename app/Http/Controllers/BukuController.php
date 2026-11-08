<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BukuController extends Controller
{
    public function index()
    {
        $daftarBuku = [
            ['id'=>1, 'judul'=>'Belajar PHP'],
            ['id'=>2, 'judul'=>'Dasar Laravel'],
            ['id'=>3, 'judul'=>'Laskar Pelangi'],
            ['id'=>4, 'judul'=>'Bumi'],
        ];
        return view('buku.index', compact('daftarBuku'));
    }
    public function show(string $id)
    {
        return view('buku.show', compact('id'));
    }
    public function kategori(?string $nama = null)
{
    $semuaBuku = [
        ['judul' => 'Belajar PHP',    'kategori' => 'pemrograman'],
        ['judul' => 'Dasar Laravel',  'kategori' => 'pemrograman'],
        ['judul' => 'Laskar Pelangi', 'kategori' => 'novel'],
        ['judul' => 'Bumi',           'kategori' => 'novel'],
    ];

    // Jika ada parameter, saring berdasarkan kategori
    $daftarBuku = $nama
        ? array_filter($semuaBuku, fn ($b) => $b['kategori'] === strtolower($nama))
        : $semuaBuku;

    return view('buku.kategori', [
        'nama'       => $nama,
        'daftarBuku' => $daftarBuku,
    ]);
}
}
