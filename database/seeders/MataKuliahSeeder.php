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
        \App\Models\MataKuliah::insert([
            // Semester 1
            ['kode' => 'PL/1001', 'nama' => 'Pengantar Rekayasa Perangkat Lunak', 'sks' => 2, 'semester' => 1, 'category' => 'Wajib'],
            ['kode' => 'PL/1002', 'nama' => 'Konsep Basis Data', 'sks' => 2, 'semester' => 1, 'category' => 'Wajib'],
            ['kode' => 'MU/1001', 'nama' => 'Agama', 'sks' => 2, 'semester' => 1, 'category' => 'Wajib'],
            ['kode' => 'MU/1004', 'nama' => 'Bahasa Indonesia', 'sks' => 2, 'semester' => 1, 'category' => 'Wajib'],
            ['kode' => 'MU/1002', 'nama' => 'Pancasila', 'sks' => 2, 'semester' => 1, 'category' => 'Wajib'],
            ['kode' => 'MU/1005', 'nama' => 'Bahasa Inggris Fundamental', 'sks' => 2, 'semester' => 1, 'category' => 'Wajib'],
            ['kode' => 'PL/1003', 'nama' => 'Konsep Teknologi Komputer dan Informasi', 'sks' => 2, 'semester' => 1, 'category' => 'Wajib'],
            ['kode' => 'PL/1004', 'nama' => 'Pengantar Kewirausahaan', 'sks' => 2, 'semester' => 1, 'category' => 'Wajib'],
            ['kode' => 'PL/1005', 'nama' => 'Matematika Diskrit', 'sks' => 2, 'semester' => 1, 'category' => 'Wajib'],
            ['kode' => 'PL/1006', 'nama' => 'Aljabar Linier', 'sks' => 2, 'semester' => 1, 'category' => 'Wajib'],
            // Semester 2
            ['kode' => 'MU/1003', 'nama' => 'Kewarganegaraan', 'sks' => 2, 'semester' => 2, 'category' => 'Wajib'],
            ['kode' => 'PL/2001', 'nama' => 'Fisika Listrik dan Sensor', 'sks' => 2, 'semester' => 2, 'category' => 'Wajib'],
            ['kode' => 'PL/2002', 'nama' => 'Pemrograman Berorientasi Objek', 'sks' => 3, 'semester' => 2, 'category' => 'Wajib'],
        ]);
    }
}
