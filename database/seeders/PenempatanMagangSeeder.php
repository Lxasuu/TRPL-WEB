<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PenempatanMagangSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $json = file_get_contents(public_path('assets/data/magang.json'));
        $data = json_decode($json, true);

        foreach ($data['companies'] as $company) {
            \App\Models\PenempatanMagang::create([
                'company_name' => $company['nama'],
                'location' => $company['lokasi'],
                'academic_year' => $data['periode_default'],
                'student_list' => $company['mahasiswa'],
            ]);
        }
    }
}
