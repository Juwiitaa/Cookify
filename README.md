<h1 align="center">COOKIFY</h1>
<h3 align="center">(Sistem Manajemen Resep Masakan Berbasis Web)</h3><br>

<p align="center">
  <img src="public/images/logo2.jpg" alt="Logo Cookify" width="150" height="auto"><br><br>
</p>

<p align="center">
  <strong>Nama :</strong> Juwita <br>
  <strong>NIM :</strong> D0223339
</p>
<br><br>

<p align="center">
  Framework Web laravel <br>
  2025
</p>
<br>

## Tentang Cookify

Cookify adalah aplikasi web yang membantu pengguna dalam menemukan, menyimpan, dan berbagi resep masakan dengan mudah. Platform ini mendukung pengguna dari berbagai latar belakang untuk menjelajahi ide masakan, mengikuti tren, hingga mengembangkan kreativitas memasak.

### Role dan fitur-fiturnya

#### 1. Admin (Pengelola aplikasi)

- Semua fitur Pembuat Resep
- Moderasi komentar dan pengguna
- Moderasi komentar & user
- Manajemen kategori dan bahan

#### 2. Kontributor (Pembuat Resep)

- Semua fitur User Umum
- Upload resep baru (pending approval atau auto-approve)
- Tambah foto/video tutorial
- Lihat statistik interaksi pada resep

#### 3. User biasa (Pencari Resep)

- Registrasi & login
- Jelajah & filter resep
- Simpan resep favorit
- Buat daftar belanja otomatis
- Komentar & rating resep

<br>

### Tabel-tabel database beserta field dan tipe datanya
<br>

#### Tabel 1 (Pengguna)

| Nama Field | Tipe Data | Keterangan |
|-------|-----------|------------|
| name | string | Nama pengguna |
| email | string | Email pengguna |
| password | string | Password pengguna |
<br>

#### Tabel 2 (Kategori)

| Nama Field | Tipe Data | Keterangan |
|-------|-----------|------------|
| name | string | Nama kategori |
<br>

#### Tabel 3 (Resep)

| Nama Field | Tipe Data | Keterangan |
|-------|-----------|------------|
| pengguna_id | string | FK dari tabel pengguna |
| kategori_id | string | FK dari tabel kategori |
| judul | string | Nama resep |
| cooking_time | integer | Waktu memasak |
| description | text | Deskripsi resep |
| steps | text | Langkah-langkah memasak |
| photo | string | Foto resep |
<br>

#### Tabel 4 (Bahan-bahan)

| Nama Field | Tipe Data | Keterangan |
|-------|-----------|------------|
| name | string | Nama bahan |
<br>

#### Tabel 5 (Resep Bahan-bahan)

| Nama Field | Tipe Data | Keterangan |
|-------|-----------|------------|
| resep_id | string | FK dari tabel resep |
| bahan_id | string | FK dari tabel bahan |
<br>

### Jenis-jenis Relasi

- Pengguna ke Resep (One-to-Many)  
- Resep ke Kategori (Many-to-Many)  
- Resep ke Bahan-bahan (Many-to-Many)