<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    use WithoutModelEvents;

    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call([
            StatSeeder::class,
            DosenSeeder::class,
            MataKuliahSeeder::class,
            PeriodeMagangSeeder::class,
            KaryaMahasiswaSeeder::class,
            BeasiswaSeeder::class,
            FaqSeeder::class,
            BlogPostSeeder::class,
        ]);
    }
}
