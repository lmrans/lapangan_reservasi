<!-- <p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

<p align="center">
<a href="https://github.com/laravel/framework/actions"><img src="https://github.com/laravel/framework/workflows/tests/badge.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

## About Laravel

Laravel is a web application framework with expressive, elegant syntax. We believe development must be an enjoyable and creative experience to be truly fulfilling. Laravel takes the pain out of development by easing common tasks used in many web projects, such as:

- [Simple, fast routing engine](https://laravel.com/docs/routing).
- [Powerful dependency injection container](https://laravel.com/docs/container).
- Multiple back-ends for [session](https://laravel.com/docs/session) and [cache](https://laravel.com/docs/cache) storage.
- Expressive, intuitive [database ORM](https://laravel.com/docs/eloquent).
- Database agnostic [schema migrations](https://laravel.com/docs/migrations).
- [Robust background job processing](https://laravel.com/docs/queues).
- [Real-time event broadcasting](https://laravel.com/docs/broadcasting).

Laravel is accessible, powerful, and provides tools required for large, robust applications.

## Learning Laravel

Laravel has the most extensive and thorough [documentation](https://laravel.com/docs) and video tutorial library of all modern web application frameworks, making it a breeze to get started with the framework.

You may also try the [Laravel Bootcamp](https://bootcamp.laravel.com), where you will be guided through building a modern Laravel application from scratch.

If you don't feel like reading, [Laracasts](https://laracasts.com) can help. Laracasts contains thousands of video tutorials on a range of topics including Laravel, modern PHP, unit testing, and JavaScript. Boost your skills by digging into our comprehensive video library.

## Laravel Sponsors

We would like to extend our thanks to the following sponsors for funding Laravel development. If you are interested in becoming a sponsor, please visit the [Laravel Partners program](https://partners.laravel.com).

### Premium Partners

- **[Vehikl](https://vehikl.com/)**
- **[Tighten Co.](https://tighten.co)**
- **[Kirschbaum Development Group](https://kirschbaumdevelopment.com)**
- **[64 Robots](https://64robots.com)**
- **[Curotec](https://www.curotec.com/services/technologies/laravel/)**
- **[DevSquad](https://devsquad.com/hire-laravel-developers)**
- **[Redberry](https://redberry.international/laravel-development/)**
- **[Active Logic](https://activelogic.com)**

## Contributing

Thank you for considering contributing to the Laravel framework! The contribution guide can be found in the [Laravel documentation](https://laravel.com/docs/contributions).

## Code of Conduct

In order to ensure that the Laravel community is welcoming to all, please review and abide by the [Code of Conduct](https://laravel.com/docs/contributions#code-of-conduct).

## Security Vulnerabilities

If you discover a security vulnerability within Laravel, please send an e-mail to Taylor Otwell via [taylor@laravel.com](mailto:taylor@laravel.com). All security vulnerabilities will be promptly addressed.

## License

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT). -->

<br>
<h3 align="center">Platform Booking dan Manajemen Layanan Barbershop</h3>
<p align="center">
  <img src="https://github.com/user-attachments/assets/8959c24a-9c85-4558-bef0-a95cdae59a86" alt="Logo unsulbar" width="200"/>
</p>

<p align="center">
  <strong>IMRAN. S</strong><br/><br/>
  <strong>D0223326</strong><br/><br/>
  <strong>Framework Web Based</strong><br/><br/>
  <strong>2025</strong>
</p>

<h3>Role dan Fitur</h3>

## 🧑‍💼 Admin

**Fungsi Utama:** Mengelola seluruh sistem, data pengguna, lapangan, dan pemesanan.

| Fitur                           | Deskripsi                                                                 |
|---------------------------------|---------------------------------------------------------------------------|
| Login Dashboard Admin           | Mengakses halaman utama admin.                                            |
| Kelola Data Lapangan (CRUD)     | Tambah, ubah, hapus, dan lihat data lapangan.                            |
| Kelola User & Petugas           | Tambah, edit, atau hapus akun pengguna dan petugas.                       |
| Melihat Semua Reservasi         | Melihat seluruh reservasi dari semua user.                               |
| Hapus / Batalkan Reservasi      | Menghapus atau membatalkan pemesanan yang tidak valid.                   |
| Laporan Pemesanan (Opsional)    | Menampilkan statistik penggunaan dan pemesanan lapangan.                |

## 🧑‍🔧 Petugas

**Fungsi Utama:** Memverifikasi reservasi dan mengelola status pemesanan.

| Fitur                          | Deskripsi                                                                  |
|--------------------------------|----------------------------------------------------------------------------|
| Login Dashboard Petugas        | Masuk ke sistem dengan role petugas.                                       |
| Melihat Daftar Reservasi       | Menampilkan semua reservasi yang masuk.                                   |
| Melihat Detail User            | Melihat informasi user yang melakukan reservasi.                          |
| Ubah Status Reservasi          | Mengubah status: Menunggu → Diterima → Selesai, atau ditolak.            |
| Melihat Jadwal Lapangan        | Menampilkan jadwal penggunaan lapangan.                                   |
| Verifikasi Pembayaran COD      | Mencatat dan memverifikasi pembayaran langsung di lokasi.                |

## 🧑 User

**Fungsi Utama:** Melakukan pemesanan lapangan dan memantau statusnya.

| Fitur                          | Deskripsi                                                                 |
|--------------------------------|---------------------------------------------------------------------------|
| Registrasi & Login             | Membuat akun dan masuk ke sistem.                                         |
| Melihat Daftar Lapangan        | Menampilkan informasi lapangan yang tersedia.                            |
| Melakukan Pemesanan            | Pilih lapangan, tanggal & jam, serta metode pembayaran (COD/Transfer).   |
| Melihat Status Reservasi       | Melihat apakah pesanan diterima, ditolak, selesai, atau menunggu.        |
| Melihat Riwayat Pemesanan      | Menampilkan semua reservasi milik sendiri.                               |
| Membatalkan Reservasi (Opsional) | Dapat membatalkan pesanan jika belum diverifikasi.                     |

<h3>Tabel-tabel database beserta field dan tipe datanya</h3>

### 🧑‍💼 **Tabel Users** (Admin, Petugas, dan User)

| Name Field    | Tipe Data      | Keterangan                               |
|---------------|----------------|------------------------------------------|
| `id`          | `bigIncrements`| ID pengguna                              |
| `name`        | `string`       | Nama pengguna                            |
| `email`       | `string`       | Email pengguna (unik)                    |
| `password`    | `string`       | Password pengguna (tidak perlu unik)     |
| `role`        | `enum`         | Role pengguna (`admin`, `petugas`, `user`)|
| `timestamps`  | `timestamps`   | Waktu dibuat dan diperbarui              |



### 🏟️ **Tabel Fields** (Lapangan)

| Name Field        | Tipe Data      | Keterangan                                           |
|-------------------|----------------|------------------------------------------------------|
| `id`              | `bigIncrements`| ID lapangan                                          |
| `name`            | `string`       | Nama lapangan                                        |
| `description`     | `text`         | Deskripsi lapangan (opsional)                        |
| `price_per_hour`  | `decimal`      | Harga per jam penggunaan lapangan                    |
| `location`        | `string`       | Lokasi lapangan (opsional)                           |
| `is_active`       | `boolean`      | Status aktif/non-aktif lapangan                      |
| `timestamps`      | `timestamps`   | Waktu dibuat dan diperbarui                           |



### 📅 **Tabel Reservations** (Pemesanan)

| Name Field       | Tipe Data      | Keterangan                                                   |
|------------------|----------------|--------------------------------------------------------------|
| `id`             | `bigIncrements`| ID pemesanan                                                 |
| `user_id`        | `foreignId`    | ID pengguna yang melakukan pemesanan (relasi ke tabel `users`)|
| `field_id`       | `foreignId`    | ID lapangan yang dipesan (relasi ke tabel `fields`)          |
| `booking_date`   | `date`         | Tanggal pemesanan                                            |
| `start_time`     | `time`         | Waktu mulai pemesanan                                         |
| `end_time`       | `time`         | Waktu selesai pemesanan                                       |
| `status`         | `enum`         | Status pemesanan (`menunggu`, `diterima`, `selesai`, `ditolak`)|
| `timestamps`     | `timestamps`   | Waktu dibuat dan diperbarui                                   |


