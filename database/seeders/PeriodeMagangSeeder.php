<?php

namespace Database\Seeders;

use App\Models\PeriodeMagang;
use Illuminate\Database\Seeder;

class PeriodeMagangSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $json = file_get_contents(public_path('assets/data/magang.json'));
        $data = json_decode($json, true);

        foreach ($data['companies'] as $company) {
            foreach ($company['mahasiswa'] as $student) {
                $startDate = '2025-02-01';
                $endDate = '2025-07-31';

                // Simple logic for the current data
                if (isset($student['periode']) && str_contains($student['periode'], 'Feb')) {
                    $startDate = '2025-02-01';
                    $endDate = '2025-07-31';
                }

                PeriodeMagang::create([
                    'student_name' => $student['nama'],
                    'nim' => $student['nim'],
                    'internship_place' => $company['nama'],
                    'location' => $company['lokasi'],
                    'start_date' => $startDate,
                    'end_date' => $endDate,
                ]);
            }
        }
    }
}
