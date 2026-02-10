<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class StatSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        \App\Models\Stat::insert([
            ['label' => 'Mahasiswa Aktif', 'value' => '520', 'icon' => 'bi bi-people'],
            ['label' => 'Alumni Sukses', 'value' => '185', 'icon' => 'bi bi-mortarboard'],
            ['label' => 'Mitra Industri', 'value' => '45', 'icon' => 'bi bi-building'],
            ['label' => 'Dosen Praktisi', 'value' => '28', 'icon' => 'bi bi-briefcase'],
        ]);
    }
}
