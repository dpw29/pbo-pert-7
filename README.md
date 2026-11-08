# Tugas PBO Pertemuan 7 - Routing, Controller & Blade

## Deskripsi
Aplikasi Laravel sederhana untuk menampilkan daftar buku, detail buku,
dan halaman kategori dengan parameter opsional. Data berupa array di Controller.

## Cara menjalankan
1. composer install
2. cp .env.example .env && php artisan key:generate
3. php artisan serve
4. Buka http://127.0.0.1:8000/buku

## Daftar route
| Method | URI                | Action                    |
|--------|--------------------|---------------------------|
| GET    | /buku              | BukuController@index      |
| GET    | /buku/{id}         | BukuController@show       |
| GET    | /kategori/{nama?}  | BukuController@kategori   |

## Alur
Route -> Controller -> Blade View -> Response HTML

## Screenshot
(sisipkan screenshot /buku, /buku/1, /kategori, /kategori/novel)