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

Cookify adalah aplikasi web yang membantu pengguna dalam menemukan, menyimpan, dan berbagi resep masakan dengan mudah. Platform ini mendukung pengguna dari berbagai latar belakang untuk menjelajahi ide masakan, hingga mengembangkan kreativitas memasak.

### Role dan fitur-fiturnya

#### 1. Admin (Pengelola aplikasi)

- Akses semua fitur Kontributor dan user biasa
- Kelola kategori
- lihat dan hapus pengguna

#### 2. Kontributor (Pembuat Resep)

- Akses semua fitur User Biasa
- Tambah, ubah, hapus resep
- tambah kategori

#### 3. User biasa (Pencari Resep)

- Registrasi & login
- Jelajahi & filter resep
- Simpan resep favorit

<br>

### Tabel-tabel database beserta field dan tipe datanya
<br>

#### Tabel 1 (users)

| Nama Field | Tipe Data | Keterangan |
|-------|-----------|------------|
| id | BIGINT | Primary key |
| name | String | Nama pengguna |
| email | String | Email pengguna |
| password | String | Password pengguna |
| role | enum | admin, kreator dan pengguna(user biasa) |
| timestamps | datetime | created_at dan updated_at |
<br>

#### Tabel 2 (kategoris)

| Nama Field | Tipe Data | Keterangan |
|-------|-----------|------------|
| id | BIGINT | Primary key |
| nama_kategori | String | Nama Kategori |
| timestamps | datetime | created_at dan updated_at |
<br>

#### Tabel 3 (reseps)

| Nama Field | Tipe Data | Keterangan |
|-------|-----------|------------|
| id | BIGINT | Primary key |
| user_id | foreignId | FK dari tabel pengguna |
| kategori_id | foreignId | FK dari tabel kategori |
| judul | String | Daftar Bahan |
| bahan | text | bahan resep |
| description | text | Deskripsi resep |
| steps | text | Deskripsi resep |
| photo | String | Foto resep |
| timestamps | datetime | created_at dan updated_at |
<br>

#### Tabel 4 (favorite)

| Nama Field | Tipe Data | Keterangan |
|-------|-----------|------------|
| id | BIGINT | Primary key |
| user_id | foreignId | ID user yang menyukai resep |
| resep_id | foreignId |  ID resep yang difavoritkan |
| timestamps | datetime | created_at dan updated_at |
<br>

### Jenis-jenis Relasi

- Pengguna ke Resep (One-to-Many)
  satu pengguna (kontributor) dapat membuat banyak resep. 

- Kategori ke Resep (One-to-Many)
  satu kategori memiliki banyak resep.

- Pengguna ke Resep (Many-to-Many)
  Satu pengguna bisa menyukai banyak resep, dan satu resep bisa disukai oleh banyak pengguna.