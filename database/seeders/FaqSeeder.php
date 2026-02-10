<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Faq;

class FaqSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faqs = [
            [
                'question' => 'Apa itu Program Studi TRPL?',
                'answer' => 'Teknologi Rekayasa Perangkat Lunak (TRPL) adalah program studi yang berfokus pada teknik pengembangan perangkat lunak skala industri, mulai dari analisis kebutuhan, desain, implementasi, hingga pengujian dan pemeliharaan.',
                'order' => 1
            ],
            [
                'question' => 'Apa perbedaan TRPL dengan Informatika biasa?',
                'answer' => 'TRPL lebih menekankan pada aspek "Rekayasa" dan "Terapan" (Vokasi). Mahasiswa lebih banyak belajar melalui praktik langsung dengan standar industri terkini dibandingkan dengan teori murni.',
                'order' => 2
            ],
            [
                'question' => 'Bagaimana prospek kerja lulusan TRPL?',
                'answer' => 'Lulusan memiliki peluang karir yang sangat luas sebagai Software Engineer, Developer (Web, Mobile, Game), QA Engineer, DevOps, Sistem Analyst, hingga AI Engineer di berbagai startup maupun perusahaan multinasional.',
                'order' => 3
            ],
            [
                'question' => 'Apakah ada program magang industri?',
                'answer' => 'Ya, program TRPL mewajibkan magang industri selama 1-2 semester untuk memberikan pengalaman kerja nyata kepada mahasiswa sebelum lulus.',
                'order' => 4
            ],
            [
                'question' => 'Fasilitas apa saja yang disediakan?',
                'answer' => 'Kami menyediakan laboratorium komputer high-end, server pribadi untuk deployment, akses ke library premium sertifikasi global, hingga Creative Hub untuk kolaborasi proyek.',
                'order' => 5
            ],
            [
                'question' => 'Apakah gelar lulusan TRPL diakui secara internasional?',
                'answer' => 'Lulusan bergelar Sarjana Terapan (S.Tr.Kom) yang setara dengan gelar Bachelor of Engineering (B.Eng) atau Applied Science, yang sangat dihargai oleh industri global.',
                'order' => 6
            ],
        ];

        foreach ($faqs as $faq) {
            Faq::create($faq);
        }
    }
}
