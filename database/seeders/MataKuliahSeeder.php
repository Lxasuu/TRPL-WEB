<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class MataKuliahSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        \App\Models\MataKuliah::truncate();

        $items = [
            // Semester 1
            ['kode' => 'PL/1001', 'nama' => 'Pengantar Rekayasa Perangkat Lunak', 'sks' => 2, 'sks_teori' => 2, 'sks_praktek' => 0, 'semester' => 1, 'category' => 'Wajib'],
            ['kode' => 'PL/1002', 'nama' => 'Konsep Basis Data', 'sks' => 2, 'sks_teori' => 1, 'sks_praktek' => 1, 'semester' => 1, 'category' => 'Wajib'],
            ['kode' => 'MU/1001', 'nama' => 'Agama', 'sks' => 2, 'sks_teori' => 2, 'sks_praktek' => 0, 'semester' => 1, 'category' => 'Wajib'],
            ['kode' => 'MU/1004', 'nama' => 'Bahasa Indonesia', 'sks' => 2, 'sks_teori' => 2, 'sks_praktek' => 0, 'semester' => 1, 'category' => 'Wajib'],
            ['kode' => 'MU/1002', 'nama' => 'Pancasila', 'sks' => 2, 'sks_teori' => 2, 'sks_praktek' => 0, 'semester' => 1, 'category' => 'Wajib'],
            ['kode' => 'MU/1005', 'nama' => 'Bahasa Inggris Fundamental', 'sks' => 2, 'sks_teori' => 1, 'sks_praktek' => 1, 'semester' => 1, 'category' => 'Wajib'],
            ['kode' => 'PL/1003', 'nama' => 'Konsep Teknologi Komputer dan Informasi', 'sks' => 2, 'sks_teori' => 2, 'sks_praktek' => 0, 'semester' => 1, 'category' => 'Wajib'],
            ['kode' => 'PL/1004', 'nama' => 'Pengantar Kewirausahaan', 'sks' => 2, 'sks_teori' => 2, 'sks_praktek' => 0, 'semester' => 1, 'category' => 'Wajib'],
            ['kode' => 'PL/1005', 'nama' => 'Matematika Diskrit', 'sks' => 2, 'sks_teori' => 2, 'sks_praktek' => 0, 'semester' => 1, 'category' => 'Wajib'],
            ['kode' => 'PL/1006', 'nama' => 'Aljabar Linier', 'sks' => 2, 'sks_teori' => 2, 'sks_praktek' => 0, 'semester' => 1, 'category' => 'Wajib'],

            // Semester 2
            ['kode' => 'MU/1003', 'nama' => 'Kewarganegaraan', 'sks' => 2, 'sks_teori' => 2, 'sks_praktek' => 0, 'semester' => 2, 'category' => 'Wajib'],
            ['kode' => 'PL/2001', 'nama' => 'Fisika Listrik dan Sensor', 'sks' => 2, 'sks_teori' => 1, 'sks_praktek' => 1, 'semester' => 2, 'category' => 'Wajib'],
            ['kode' => 'PL/2002', 'nama' => 'Pemrograman Berorientasi Objek', 'sks' => 3, 'sks_teori' => 1, 'sks_praktek' => 2, 'semester' => 2, 'category' => 'Wajib'],
            ['kode' => 'PL/2003', 'nama' => 'Jaringan Komputer', 'sks' => 3, 'sks_teori' => 1, 'sks_praktek' => 2, 'semester' => 2, 'category' => 'Wajib'],
            ['kode' => 'PL/2007', 'nama' => 'Software Profiling', 'sks' => 2, 'sks_teori' => 1, 'sks_praktek' => 1, 'semester' => 2, 'category' => 'Wajib'],
            ['kode' => 'PL/2009', 'nama' => 'Algoritma dan Logika Pemrograman', 'sks' => 2, 'sks_teori' => 1, 'sks_praktek' => 1, 'semester' => 2, 'category' => 'Wajib'],
            ['kode' => 'PL/4003', 'nama' => 'Aplikasi Pendukung Keputusan', 'sks' => 2, 'sks_teori' => 1, 'sks_praktek' => 1, 'semester' => 2, 'category' => 'Wajib'],
            ['kode' => 'PL/2008', 'nama' => 'Pengolahan Basis Data', 'sks' => 2, 'sks_teori' => 1, 'sks_praktek' => 1, 'semester' => 2, 'category' => 'Wajib'],
            ['kode' => 'PL/2004', 'nama' => 'Rekayasa Kebutuhan Perangkat Lunak', 'sks' => 2, 'sks_teori' => 2, 'sks_praktek' => 0, 'semester' => 2, 'category' => 'Wajib'],

            // Semester 3
            ['kode' => 'PL/3008', 'nama' => 'Kewirausahaan Bidang IT', 'sks' => 2, 'sks_teori' => 2, 'sks_praktek' => 0, 'semester' => 3, 'category' => 'Wajib'],
            ['kode' => 'MU/1006', 'nama' => 'Bahasa Inggris Bisnis', 'sks' => 2, 'sks_teori' => 2, 'sks_praktek' => 0, 'semester' => 3, 'category' => 'Wajib'],
            ['kode' => 'PL/3001', 'nama' => 'Pemrograman Web (Monolithic)', 'sks' => 3, 'sks_teori' => 1, 'sks_praktek' => 2, 'semester' => 3, 'category' => 'Wajib'],
            ['kode' => 'PL/3002', 'nama' => 'Struktur Data dan Algoritma', 'sks' => 2, 'sks_teori' => 1, 'sks_praktek' => 1, 'semester' => 3, 'category' => 'Wajib'],
            ['kode' => 'PL/3003', 'nama' => 'Metode Numerik', 'sks' => 2, 'sks_teori' => 2, 'sks_praktek' => 0, 'semester' => 3, 'category' => 'Wajib'],
            ['kode' => 'PL/3005', 'nama' => 'Sistem Berbasis Jaringan', 'sks' => 3, 'sks_teori' => 1, 'sks_praktek' => 2, 'semester' => 3, 'category' => 'Wajib'],
            ['kode' => 'PL/3006', 'nama' => 'Pemodelan Perangkat Lunak', 'sks' => 2, 'sks_teori' => 2, 'sks_praktek' => 0, 'semester' => 3, 'category' => 'Wajib'],
            ['kode' => 'PL/2007_v2', 'nama' => 'Aplikasi Komputer', 'sks' => 2, 'sks_teori' => 0, 'sks_praktek' => 2, 'semester' => 3, 'category' => 'Wajib'],

            // Semester 4
            ['kode' => 'PL/4001', 'nama' => 'Microprocessing Microcontroller', 'sks' => 2, 'sks_teori' => 1, 'sks_praktek' => 1, 'semester' => 4, 'category' => 'Wajib'],
            ['kode' => 'PL/4002', 'nama' => 'Desain Perangkat Lunak (UI/UX)', 'sks' => 2, 'sks_teori' => 1, 'sks_praktek' => 1, 'semester' => 4, 'category' => 'Wajib'],
            ['kode' => 'PL/4004', 'nama' => 'Pemrograman Android', 'sks' => 3, 'sks_teori' => 1, 'sks_praktek' => 2, 'semester' => 4, 'category' => 'Wajib'],
            ['kode' => 'PL/4006', 'nama' => 'Pemrograman Web Lanjut (Microservices)', 'sks' => 3, 'sks_teori' => 1, 'sks_praktek' => 2, 'semester' => 4, 'category' => 'Wajib'],
            ['kode' => 'PL/4007', 'nama' => 'Manajemen Kualitas Perangkat Lunak', 'sks' => 2, 'sks_teori' => 2, 'sks_praktek' => 0, 'semester' => 4, 'category' => 'Wajib'],
            ['kode' => 'PL/4008', 'nama' => 'Dasar Pemrograman Python', 'sks' => 2, 'sks_teori' => 1, 'sks_praktek' => 1, 'semester' => 4, 'category' => 'Wajib'],
            ['kode' => 'PL/4009', 'nama' => 'Cloud Computing', 'sks' => 2, 'sks_teori' => 1, 'sks_praktek' => 1, 'semester' => 4, 'category' => 'Wajib'],
            ['kode' => 'PL/3004', 'nama' => 'Statistika', 'sks' => 4, 'sks_teori' => 3, 'sks_praktek' => 1, 'semester' => 4, 'category' => 'Wajib'],
            ['kode' => 'PL/4005', 'nama' => 'Keamanan Perangkat Lunak', 'sks' => 2, 'sks_teori' => 2, 'sks_praktek' => 0, 'semester' => 4, 'category' => 'Wajib'],

            // Semester 5
            ['kode' => 'PL/5010', 'nama' => 'Metode Penelitian', 'sks' => 2, 'sks_teori' => 2, 'sks_praktek' => 0, 'semester' => 5, 'category' => 'Wajib'],
            ['kode' => 'PL/5001', 'nama' => 'Manajemen Proyek Perangkat Lunak', 'sks' => 2, 'sks_teori' => 2, 'sks_praktek' => 0, 'semester' => 5, 'category' => 'Wajib'],
            ['kode' => 'PL/5002', 'nama' => 'Internet of Things (IoT)', 'sks' => 2, 'sks_teori' => 1, 'sks_praktek' => 1, 'semester' => 5, 'category' => 'Wajib'],
            ['kode' => 'PL/5003', 'nama' => 'Manajemen Konfigurasi Perangkat Lunak', 'sks' => 2, 'sks_teori' => 2, 'sks_praktek' => 0, 'semester' => 5, 'category' => 'Wajib'],
            ['kode' => 'PL/5004', 'nama' => 'Pengujian Perangkat Lunak', 'sks' => 2, 'sks_teori' => 1, 'sks_praktek' => 1, 'semester' => 5, 'category' => 'Wajib'],
            ['kode' => 'PL/5005', 'nama' => 'Data Science', 'sks' => 3, 'sks_teori' => 1, 'sks_praktek' => 2, 'semester' => 5, 'category' => 'Wajib'],
            ['kode' => 'PL/5006', 'nama' => 'Mobile Computing', 'sks' => 3, 'sks_teori' => 1, 'sks_praktek' => 2, 'semester' => 5, 'category' => 'Wajib'],
            ['kode' => 'PL/5008', 'nama' => 'Sistem Pakar', 'sks' => 2, 'sks_teori' => 1, 'sks_praktek' => 1, 'semester' => 5, 'category' => 'Wajib'],
            ['kode' => 'PL/5007', 'nama' => 'Sistem Informasi (MK Peminatan SE)', 'sks' => 2, 'sks_teori' => 1, 'sks_praktek' => 1, 'semester' => 5, 'category' => 'Peminatan'],
            ['kode' => 'PL/8002', 'nama' => 'Enterprise Resource Planning (MK Peminatan DevOps)', 'sks' => 3, 'sks_teori' => 2, 'sks_praktek' => 1, 'semester' => 5, 'category' => 'Peminatan'],

            // Semester 6
            ['kode' => 'PL/3007', 'nama' => 'Etika Profesi', 'sks' => 2, 'sks_teori' => 2, 'sks_praktek' => 0, 'semester' => 6, 'category' => 'Wajib'],
            ['kode' => 'PL/6001', 'nama' => 'Organisasi Industri', 'sks' => 4, 'sks_teori' => 0, 'sks_praktek' => 4, 'semester' => 6, 'category' => 'Wajib'],
            ['kode' => 'PL/6002', 'nama' => 'Etika Profesi Kerja Industri', 'sks' => 4, 'sks_teori' => 0, 'sks_praktek' => 4, 'semester' => 6, 'category' => 'Wajib'],
            ['kode' => 'PL/6003', 'nama' => 'Analisa Kebutuhan Proyek', 'sks' => 4, 'sks_teori' => 0, 'sks_praktek' => 4, 'semester' => 6, 'category' => 'Wajib'],
            ['kode' => 'PL/6004', 'nama' => 'Pengelolaan Proyek', 'sks' => 4, 'sks_teori' => 0, 'sks_praktek' => 4, 'semester' => 6, 'category' => 'Wajib'],
            ['kode' => 'PL/6005', 'nama' => 'Pengembangan Proyek Aplikasi', 'sks' => 4, 'sks_teori' => 0, 'sks_praktek' => 4, 'semester' => 6, 'category' => 'Wajib'],

            // Semester 7
            ['kode' => 'PL/7001', 'nama' => 'Pengembangan Proyek Industri Manufaktur', 'sks' => 4, 'sks_teori' => 0, 'sks_praktek' => 4, 'semester' => 7, 'category' => 'Wajib'],
            ['kode' => 'PL/7002', 'nama' => 'Pengembangan Proyek Data', 'sks' => 4, 'sks_teori' => 0, 'sks_praktek' => 4, 'semester' => 7, 'category' => 'Wajib'],
            ['kode' => 'PL/7003', 'nama' => 'Pengembangan Proyek Visual', 'sks' => 2, 'sks_teori' => 0, 'sks_praktek' => 2, 'semester' => 7, 'category' => 'Wajib'],
            ['kode' => 'PL/7004', 'nama' => 'Pengujian Proyek', 'sks' => 4, 'sks_teori' => 0, 'sks_praktek' => 4, 'semester' => 7, 'category' => 'Wajib'],
            ['kode' => 'PL/7005', 'nama' => 'Dokumentasi Pengembangan Proyek', 'sks' => 2, 'sks_teori' => 0, 'sks_praktek' => 2, 'semester' => 7, 'category' => 'Wajib'],
            ['kode' => 'PL/7006', 'nama' => 'Dokumentasi Hasil Magang atau Praktik Industri', 'sks' => 4, 'sks_teori' => 0, 'sks_praktek' => 4, 'semester' => 7, 'category' => 'Wajib'],

            // Semester 8
            ['kode' => 'PL/8001', 'nama' => 'Skripsi', 'sks' => 6, 'sks_teori' => 0, 'sks_praktek' => 6, 'semester' => 8, 'category' => 'Wajib'],
            ['kode' => 'PL/5009', 'nama' => 'Artificial Intelegence (MK Peminatan SE)', 'sks' => 2, 'sks_teori' => 1, 'sks_praktek' => 1, 'semester' => 8, 'category' => 'Peminatan'],
            ['kode' => 'PL/8004', 'nama' => 'Otomasi Industri (MK Peminatan Devops)', 'sks' => 2, 'sks_teori' => 1, 'sks_praktek' => 1, 'semester' => 8, 'category' => 'Peminatan'],
            ['kode' => 'PL/8003', 'nama' => 'Kapita Selekta', 'sks' => 2, 'sks_teori' => 2, 'sks_praktek' => 0, 'semester' => 8, 'category' => 'Wajib'],
        ];

        foreach ($items as $item) {
            \App\Models\MataKuliah::updateOrCreate(
                ['kode' => $item['kode']],
                $item
            );
        }
    }
}
