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

## 📌 Rincian Fitur Berdasarkan Role

### 🧑‍💼 Admin – Pengelola Sistem

| Fitur                                | Deskripsi                                                                                   |
|--------------------------------------|---------------------------------------------------------------------------------------------|
| Mengelola data lapangan (CRUD)      | Admin dapat membuat, melihat, mengubah, dan menghapus data lapangan olahraga.              |
| Melihat semua reservasi             | Admin dapat melihat seluruh reservasi yang masuk beserta statusnya.                        |
| Mengelola akun user & petugas       | Admin dapat mengelola akun semua pengguna termasuk petugas dan user (edit, hapus, reset).  |
| Melihat data pembayaran             | Admin dapat mengakses seluruh riwayat pembayaran yang dilakukan oleh user.                 |

---

### 🧑‍🔧 Petugas – Verifikator

| Fitur                                | Deskripsi                                                                                   |
|--------------------------------------|---------------------------------------------------------------------------------------------|
| Melihat semua reservasi             | Petugas dapat memantau seluruh reservasi yang dilakukan oleh user.                         |
| Menyetujui/menolak reservasi        | Petugas dapat mengubah status reservasi sesuai kondisi setelah verifikasi pembayaran.      |
| Melihat data pembayaran             | Petugas dapat melihat pembayaran yang dilakukan user beserta bukti transfer.               |
| Verifikasi & ubah status pembayaran | Petugas mengecek dan memverifikasi bukti pembayaran lalu mengubah status menjadi lunas/gagal.|

---

### 🧑 User – Pemesan Lapangan

| Fitur                                | Deskripsi                                                                                   |
|--------------------------------------|---------------------------------------------------------------------------------------------|
| Registrasi & login                  | User dapat mendaftar dan masuk ke sistem menggunakan email dan password.                   |
| Melihat daftar lapangan             | User bisa melihat semua lapangan yang tersedia untuk disewa beserta detailnya.             |
| Melakukan reservasi lapangan        | User dapat memilih lapangan, tanggal dan waktu untuk melakukan pemesanan.                  |
| Mengunggah bukti pembayaran         | Setelah reservasi, user akan mengunggah bukti transfer pembayaran sesuai tagihan.          |
| Melihat status reservasi & pembayaran | User dapat melihat status pemesanan dan apakah pembayaran sudah diverifikasi atau belum.  |
