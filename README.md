# Sistem Informasi Akademik Sederhana (SIAKAD)

Project ini dikembangkan sebagai tugas **Ujian Tengah Semester (UTS)** mata kuliah Pemrograman Web 2. Sistem ini merupakan aplikasi pengelolaan data akademik yang mencakup manajemen data Jurusan, Mahasiswa, dan Matakuliah menggunakan framework Laravel 12.

## 🚀 Fitur Utama
Sistem ini mencakup seluruh persyaratan fungsional sesuai studi kasus:
1. **Authentication**: Sistem login wajib menggunakan middleware auth untuk melindungi akses CRUD.
2. **Manajemen Jurusan**: Create, Read, Update, Delete data jurusan.
3. **Manajemen Mahasiswa**: Pengelolaan data mahasiswa dengan relasi ke tabel Jurusan (Belongs To).
4. **Manajemen Matakuliah**: Pengelolaan data matakuliah dengan relasi ke tabel Jurusan (Belongs To).

## 🛠️ Teknologi yang Digunakan
- **Framework**: Laravel 12
- **Database**: MySQL
- **Frontend**: Tailwind CSS (via CDN untuk stabilitas environment)
- **Environment**: Laragon
