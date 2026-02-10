<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class BeasiswaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        \App\Models\Beasiswa::insert([
            [
                'name' => 'Beasiswa Mitra Industri 30 – 50%',
                'provider' => 'Politeknik Meta Industri',
                'type' => 'Karyawan',
                'description' => 'Potongan 30–50% khusus untuk karyawan atau keluarga karyawan perusahaan mitra.',
                'deadline' => now()->addMonths(6),
                'requirements' => 'Karyawan/Keluarga karyawan mitra industri.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Beasiswa Tes Konversi',
                'provider' => 'Politeknik Meta Industri',
                'type' => 'Karyawan',
                'description' => 'Beasiswa hingga 100% berdasarkan hasil tes konversi saat pendaftaran.',
                'deadline' => now()->addMonths(6),
                'requirements' => 'Hasil tes konversi pendaftaran.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Beasiswa Yayasan Pelayanan Kasih A&A Rachmat',
                'provider' => 'YPKAAR',
                'type' => 'Karyawan',
                'description' => 'Beasiswa untuk mahasiswa berprestasi and berkepribadian unggul.',
                'deadline' => now()->addMonths(3),
                'requirements' => 'Prestasi akademik and kepribadian unggul.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Beasiswa Mahasiswa Baru',
                'provider' => 'Politeknik Meta Industri',
                'type' => 'Reguler',
                'description' => 'Skema beasiswa untuk mahasiswa baru kelas reguler.',
                'deadline' => now()->addMonths(6),
                'requirements' => 'Mahasiswa baru reguler.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Beasiswa Prestasi Akademik',
                'provider' => 'Politeknik Meta Industri',
                'type' => 'Reguler',
                'description' => 'Beasiswa untuk mahasiswa dengan IPK and prestasi tertentu.',
                'deadline' => now()->addMonths(6),
                'requirements' => 'IPK minimal 3.5.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
