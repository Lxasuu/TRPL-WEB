# 🎓 Website Teknologi Rekayasa Perangkat Lunak (TRPL)
### Politeknik Meta Industri Cikarang

[![Laravel](https://img.shields.io/badge/Laravel-12.x-FF2D20?style=for-the-badge&logo=laravel&logoColor=white)](https://laravel.com)
[![Filament](https://img.shields.io/badge/Filament-4.0--beta-FBBF24?style=for-the-badge&logo=filament&logoColor=black)](https://filamentphp.com)
[![TailwindCSS](https://img.shields.io/badge/Tailwind_CSS-4.x-38B2AC?style=for-the-badge&logo=tailwind-css&logoColor=white)](https://tailwindcss.com)
[![PHP](https://img.shields.io/badge/PHP-8.2+-777BB4?style=for-the-badge&logo=php&logoColor=white)](https://php.net)

Website resmi Program Studi **Teknologi Rekayasa Perangkat Lunak (TRPL)** di Politeknik Meta Industri Cikarang. Platform ini dirancang untuk memberikan informasi komprehensif mengenai kurikulum, dosen, prestasi mahasiswa, serta menjadi hub informasi bagi calon mahasiswa and industri partner.

---

## ✨ Fitur Utama

- 🛠️ **Full CMS with Filament**: Panel admin yang powerful untuk mengelola seluruh konten website (Dosen, Blog, Karya Mahasiswa, dll).
- 📚 **Dynamic Curriculum**: Daftar mata kuliah yang terintegrasi dengan perhitungan SKS otomatis (Teori/Praktek) per semester.
- 📰 **Dynamic Blog System**: Artikel dengan kategori, tag, and fitur pencarian yang dinamis.
- 🤝 **Partner & Internship Management**: Pengelolaan data mitra industri and periode magang mahasiswa secara real-time.
- 📱 **Responsive Design**: Tampilan modern yang dioptimalkan untuk berbagai perangkat (Desktop, Tablet, Mobile).
- 🚀 **SEO Optimized**: Struktur HTML semantik dengan metadata yang dioptimalkan untuk mesin pencari.

---

## 🚀 Teknologi yang Digunakan

| Komponen | Teknologi |
| --- | --- |
| **Framework** | Laravel 12.x |
| **Admin Panel** | Filament PHP 4.0 (Beta) |
| **Styling** | Tailwind CSS 4.x & Modern Vanilla CSS |
| **Asset Manager** | Vite 7.x |
| **Database** | MySQL / PostgreSQL |
| **Runtime** | PHP 8.2+ |

---

## 🛠️ Instalasi Lokal

Ikuti langkah-langkah berikut untuk menjalankan project di lingkungan development Anda:

1. **Clone Repository**
   ```bash
   git clone https://github.com/username/trpl-web.git
   cd trpl-web
   ```

2. **Install Dependensi**
   ```bash
   composer install
   npm install
   ```

3. **Konfigurasi Environment**
   ```bash
   cp .env.example .env
   php artisan key:generate
   ```
   *Sesuaikan pengaturan database di file `.env`.*

4. **Migrasi & Seeding**
   ```bash
   php artisan migrate --seed
   ```

5. **Jalankan Aplikasi**
   ```bash
   npm run dev
   ```

---

## 📂 Struktur Folder Penting

- `app/Filament/Resources/`: Konfigurasi resource untuk Dashboard Admin.
- `app/Models/`: Definisi skema and relasi database.
- `resources/views/`: File template Blade untuk tampilan frontend.
- `public/assets/`: File statis seperti gambar, CSS, and JavaScript.

---

## 📄 Lisensi

Project ini dikembangkan untuk keperluan internal **Politeknik Meta Industri Cikarang**. Seluruh hak cipta dilindungi.

---

<p align="center">
  Dibuat dengan ❤️ oleh Tim Pengembang TRPL Politeknik Meta Industri
</p>
