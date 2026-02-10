<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class KaryaMahasiswaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        \App\Models\KaryaMahasiswa::insert([
            [
                'title' => 'Sistem Informasi Akademik',
                'slug' => 'sistem-informasi-akademik',
                'student_name' => 'Tim Web TRPL',
                'image_path' => 'assets/img/portfolio/app-1.jpg',
                'description' => 'Sistem informasi terintegrasi untuk pengelolaan data akademik mahasiswa dan dosen.',
                'link' => '#',
                'category' => 'Web App',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'E-Commerce Mobile',
                'slug' => 'e-commerce-mobile',
                'student_name' => 'Tim Mobile TRPL',
                'image_path' => 'assets/img/portfolio/product-1.jpg',
                'description' => 'Aplikasi belanja online berbasis mobile dengan fitur real-time tracking.',
                'link' => '#',
                'category' => 'Mobile App',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'Smart Agriculture IoT',
                'slug' => 'smart-agriculture-iot',
                'student_name' => 'Tim AI/IoT TRPL',
                'image_path' => 'assets/img/portfolio/branding-1.jpg',
                'description' => 'Solusi cerdas pertanian berbasis IoT untuk pemantauan lahan secara otomatis.',
                'link' => '#',
                'category' => 'AI & IoT',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
