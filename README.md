# Tugas Week 6 PAW - Fitur Login Menggunakan Konsep MVC

Repositori ini berisi pengerjaan Studi Kasus 1 Pengembangan Aplikasi Web (Pekan 6). Proyek ini adalah aplikasi web sederhana untuk mengimplementasikan fitur autentikasi (Login) yang dibangun menggunakan arsitektur **MVC (Model-View-Controller)** murni dengan PHP Native.

## Fitur Aplikasi
- **Antarmuka Form Login (View):** Menampilkan halaman form login dengan desain UI berbasis CSS bergaya card.
- **Autentikasi Pengguna (Model & Controller):** Mengecek kecocokan kredensial (email dan password) yang diinputkan pengguna dengan data di database.
- **Notifikasi Status:** Menampilkan pesan error (alert merah) jika login gagal, dan pesan sukses (alert hijau) jika login berhasil.
- **Manajemen Sesi (Session):** Mengarahkan pengguna yang berhasil login ke halaman Dashboard dan menampilkan sapaan berdasarkan email pengguna.

## Struktur File
- `index.php` : File *entry point* utama yang memanggil controller untuk memproses request.
- `controllers/LoginController.php` : File controller yang mengatur alur logika, menerima input dari form, memanggil model, dan mengarahkan ke view yang tepat.
- `models/UserModel.php` : File model yang menangani koneksi database dan query pengecekan data *user*.
- `views/login.php` : Halaman antarmuka form login beserta *styling* CSS.
- `views/dashboard.php` : Halaman antarmuka beranda/dashboard setelah *user* berhasil login.

## Cara Menjalankan Project (Localhost)
1. Pastikan layanan Apache dan MySQL di Laragon sudah berjalan (*Start All*).
2. Buka phpMyAdmin (http://localhost/phpmyadmin).
3. Buat database baru dengan nama `db_mvclogin`.
4. Buat tabel bernama `users` dengan struktur berikut:
   - `id` (INT, Primary Key, Auto Increment)
   - `email` (VARCHAR 100)
   - `password` (VARCHAR 255)
5. Masukkan (*insert*) minimal satu data *dummy* ke dalam tabel `users` (misalnya, email: `admin@gmail.com`, password: `12345`).
6. Simpan folder project ini di dalam direktori root server Laragon (`C:\laragon\www\PAW-MVCLOGIN-NADHIEF-102042500117`).
7. Pastikan konfigurasi koneksi database di file `models/UserModel.php` sudah sesuai (`root`, tanpa password, nama database `db_mvclogin`).
8. Buka browser dan akses URL: `http://localhost/PAW-MVCLOGIN-NADHIEF-102042500117/`.
