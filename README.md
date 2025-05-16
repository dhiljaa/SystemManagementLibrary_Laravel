<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400"></a></p>

# Laravel Library Management System

Berikut template **README.md** siap‐pakai untuk repo **SystemManagementLibrary\_Laravel**-mu. Tinggal salin tempel ke file `README.md` di root proyek GitHub-mu—semua instruksi sudah dalam Bahasa Indonesia dan lengkap dengan panduan instalasi cepat, fitur, serta kredensial demo.

````markdown
# 📚 SystemManagementLibrary_Laravel

Manajemen perpustakaan berbasis web dibangun dengan **Laravel 10**, men-cover siklus penuh pengelolaan buku, penulis, penerbit, kategori, peminjaman, dan laporan. Cocok untuk sekolah, kampus, maupun perpustakaan umum skala kecil–menengah.

---

## ✨ Fitur Utama
| Modul | Fitur Detail |
|-------|--------------|
| **Autentikasi** | Login, logout, ganti password |
| **Dashboard** | Ringkasan statistik koleksi & peminjaman |
| **Penulis** | CRUD data penulis |
| **Penerbit** | CRUD data penerbit |
| **Kategori** | CRUD kategori buku |
| **Buku** | CRUD buku lengkap dengan cover & stok |
| **Siswa/Anggota** | CRUD data anggota / siswa |
| **Peminjaman** | Peminjaman, pengembalian, denda terlambat |
| **Laporan** | Laporan tanggal, bulanan, buku belum kembali |
| **Pengaturan** | Profil perpustakaan, logo, info kontak |

> **Catatan:** Semua rute dilindungi middleware `auth` kecuali halaman login.

---

## 🛠️ Tech Stack
- **PHP 8.2** & **Laravel 10**
- **MySQL/MariaDB**
- **Blade** + TailwindCSS
- **JavaScript (Vite + Vue optional)**
- **Composer** & **NPM** untuk manajemen paket

---

## 🚀 Instalasi Cepat

```bash
# 1. Clone repo
git clone https://github.com/dhiljaa/SystemManagementLibrary_Laravel.git
cd SystemManagementLibrary_Laravel

# 2. Instal dependensi backend
composer install

# 3. Instal & build asset frontend
npm install
npm run dev            # atau npm run build untuk production

# 4. Salin env & generate key
cp .env.example .env   # Windows: copy .env.example .env
php artisan key:generate

# 5. Atur koneksi database di .env lalu migrate + seed demo data
php artisan migrate:fresh --seed

# 6. Jalankan server lokal
php artisan serve
````

### 🔑 Kredensial Demo

| Role       | Username       | Password   |
| ---------- | -------------- | ---------- |
| Admin Demo | `tauseedzaman` | `password` |

---

## 🗺️ Ringkasan Rute Web

Rute publik:

| Method | URI | Controller              | Middleware |
| ------ | --- | ----------------------- | ---------- |
| GET    | /   | `welcome` view          | guest      |
| POST   | /   | `LoginController@login` | guest      |

Rute terotentikasi (ringkasan):

* `/dashboard` – Dashboard utama
* `/authors`, `/publishers`, `/categories`, `/books`, `/students` – CRUD modul
* `/book_issue` – Peminjaman buku
* `/reports/*` – Laporan (tanggal, bulanan, belum kembali)
* `/settings` – Pengaturan profil

---

## 📸 Cuplikan Layar

<!--
Tambahkan tangkapan layar di folder /screenshots lalu sematkan di sini, contoh:
![Dashboard](screenshots/dashboard.png)
-->

---

## 🤝 Kontribusi

1. Fork repo & buat branch fitur:

   ```bash
   git checkout -b fitur/fitur-baru
   ```
2. Commit perubahan (sertakan deskripsi jelas).
3. Push ke branch:

   ```bash
   git push origin fitur/fitur-baru
   ```
4. Buka Pull Request.

---

## 📝 Lisensi

Proyek ini dilisensikan di bawah **MIT License** — silakan lihat file `LICENSE` untuk detail.

---

> Dibuat dengan ❤ oleh \[nama Anda] — Selamat berkarya dan semoga bermanfaat!

````

### Cara pakai
1. **Buat atau timpa** file `README.md` di root repositori.
2. Commit & push:
   ```bash
   git add README.md
   git commit -m "docs: tambah README lengkap"
   git push
````

3. Buka halaman GitHub repo — README baru akan tampil otomatis.

Silakan menyesuaikan (badge, screenshot, penulis, dsb.) sesuai kebutuhan. Good luck!

