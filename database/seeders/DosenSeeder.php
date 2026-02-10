<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DosenSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        \App\Models\Dosen::insert([
            [
                'name' => 'Manase Sahat H. S., M.Kom.',
                'title' => 'Koordinator Prodi | Lektor | S2',
                'bio' => 'Dosen Tetap Program Studi Teknologi Rekayasa Perangkat Lunak. Berfokus pada pengembangan sistem informasi industri.',
                'image_path' => 'assets/img/team/manase-sahat.jpg',
                'is_active' => true,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Nita Winda Sari, S.Kom., M.Kom.',
                'title' => 'Dosen Tetap | S2',
                'bio' => 'Dosen Tetap Program Studi Teknologi Rekayasa Perangkat Lunak. Berfokus pada pengajaran dan penelitian di bidang teknologi rekayasa perangkat lunak.',
                'image_path' => 'assets/img/team/nita.png',
                'is_active' => true,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Fritz Gamaliel, S.Kom., M.T.',
                'title' => 'Lektor | S2',
                'bio' => 'Dosen Tetap Program Studi Teknologi Rekayasa Perangkat Lunak. Berfokus pada pengembangan sistem berbasis teknologi informasi dan rekayasa perangkat lunak.',
                'image_path' => 'assets/img/team/fritz-gamaliel.jpg',
                'is_active' => true,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Miswadi, S.Kom., M.Kom.',
                'title' => 'Dosen Tetap | S2',
                'bio' => 'Dosen Tetap Program Studi Teknologi Rekayasa Perangkat Lunak. Berfokus pada implementasi sistem informasi dan manajemen data industri.',
                'image_path' => 'assets/img/team/miswadi.jpg',
                'is_active' => true,
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
