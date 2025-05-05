<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

<p align="center">
<a href="https://github.com/laravel/framework/actions"><img src="https://github.com/laravel/framework/workflows/tests/badge.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Role dan Fitur Cookify</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 20px;
            line-height: 1.6;
        }
        h1, h2, h3 {
            color: #2c3e50;
        }
        table {
            width: 100%;
            border-collapse: collapse;
            margin-bottom: 25px;
        }
        table, th, td {
            border: 1px solid #888;
        }
        th, td {
            padding: 10px;
            text-align: left;
        }
        ul {
            margin-left: 20px;
        }
    </style>
</head>
<body>

    <h1>Role dan Fitur-fiturnya</h1>

    <p><strong>Cookify</strong> adalah aplikasi web yang membantu pengguna dalam menemukan, menyimpan, dan berbagi resep masakan dengan mudah. Platform ini mendukung pengguna dari berbagai latar belakang untuk menjelajahi ide masakan, mengikuti tren, hingga mengembangkan kreativitas memasak.</p>

    <h2>1. Admin (Pengelola Aplikasi)</h2>
    <ul>
        <li>Semua fitur Pembuat Resep</li>
        <li>Verifikasi & moderasi resep</li>
        <li>Moderasi komentar & user</li>
        <li>Manajemen kategori dan bahan</li>
    </ul>

    <h2>2. Kontributor (Pembuat Resep)</h2>
    <ul>
        <li>Semua fitur User Umum</li>
        <li>Upload resep baru (pending approval atau auto-approve)</li>
        <li>Tambah foto/video tutorial</li>
        <li>Lihat statistik interaksi pada resep</li>
    </ul>

    <h2>3. User Biasa (Pencari Resep)</h2>
    <ul>
        <li>Registrasi & login</li>
        <li>Jelajah & filter resep</li>
        <li>Simpan resep favorit</li>
        <li>Buat daftar belanja otomatis</li>
        <li>Komentar & rating resep</li>
    </ul>

    <h1>Tabel-tabel Database Beserta Field dan Tipe Datanya</h1>

    <h2>1. Tabel Pengguna</h2>
    <table>
        <tr><th>Nama Field</th><th>Tipe Data</th><th>Keterangan</th></tr>
        <tr><td>name</td><td>String</td><td>Nama pengguna</td></tr>
        <tr><td>email</td><td>String</td><td>Email pengguna</td></tr>
        <tr><td>password</td><td>String</td><td>Password pengguna</td></tr>
    </table>

    <h2>2. Tabel Kategori</h2>
    <table>
        <tr><th>Nama Field</th><th>Tipe Data</th><th>Keterangan</th></tr>
        <tr><td>name</td><td>String</td><td>Nama kategori</td></tr>
    </table>

    <h2>3. Tabel Resep</h2>
    <table>
        <tr><th>Nama Field</th><th>Tipe Data</th><th>Keterangan</th></tr>
        <tr><td>Pengguna id</td><td>String</td><td>Foreign key dari tabel pengguna</td></tr>
        <tr><td>Kategori id</td><td>String</td><td>Foreign key dari tabel kategori</td></tr>
        <tr><td>Judul</td><td>String</td><td>Nama resep</td></tr>
        <tr><td>Cooking_time</td><td>Integer</td><td>Keterangan waktu memasak</td></tr>
        <tr><td>description</td><td>Text</td><td>Deskripsi resep masakan</td></tr>
        <tr><td>steps</td><td>Text</td><td>Langkah-langkah memasak</td></tr>
        <tr><td>photo</td><td>String</td><td>Untuk memperjelas konten</td></tr>
    </table>

    <h2>4. Tabel Bahan-bahan</h2>
    <table>
        <tr><th>Nama Field</th><th>Tipe Data</th><th>Keterangan</th></tr>
        <tr><td>name</td><td>String</td><td>Nama bahan-bahan</td></tr>
    </table>

    <h2>5. Tabel Resep Bahan-bahan</h2>
    <table>
        <tr><th>Nama Field</th><th>Tipe Data</th><th>Keterangan</th></tr>
        <tr><td>Resep id</td><td>String</td><td>Foreign key dari tabel resep</td></tr>
        <tr><td>Bahan-bahan id</td><td>String</td><td>Foreign key dari tabel bahan-bahan</td></tr>
    </table>

    <h1>Jenis Relasi dan Tabel yang Berelasi</h1>
    <ol>
        <li>Pengguna ke Resep (Many to Many)</li>
        <li>Resep ke Kategori (Many to Many)</li>
        <li>Resep ke Bahan-bahan (Many to Many)</li>
        <li>Bahan-bahan ke Resep Bahan-bahan (Many to Many)</li>
    </ol>

</body>
</html>
