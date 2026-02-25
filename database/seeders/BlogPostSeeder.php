<?php

namespace Database\Seeders;

use App\Models\BlogPost;
use App\Models\Dosen;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class BlogPostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        BlogPost::truncate();
        $dosens = Dosen::all();
        
        if ($dosens->isEmpty()) {
            $this->call(DosenSeeder::class);
            $dosens = Dosen::all();
        }

        $posts = [
            [
                'title' => 'Pendaftaran Magang Industri Batch 1 2026 Dibuka',
                'content' => 'Kabar gembira untuk mahasiswa TRPL! Pendaftaran magang industri untuk Batch 1 tahun 2026 telah resmi dibuka. Mahasiswa dapat mendaftarkan diri melalui portal resmi magang mulai tanggal 1 Maret hingga 15 Maret 2026. Pastikan CV dan portfolio Anda sudah diperbarui.',
                'status' => 'published',
                'category' => 'Akademik',
            ],
            [
                'title' => 'Workshop UI/UX Design dengan Figma',
                'content' => 'Himpunan Mahasiswa TRPL akan mengadakan workshop intensif mengenai desain UI/UX menggunakan Figma. Workshop ini dirancang untuk pemula hingga menengah yang ingin mendalami desain antarmuka pengguna yang modern dan fungsional.',
                'status' => 'published',
                'category' => 'Kegiatan',
            ],
            [
                'title' => 'Kunjungan Industri ke Google Indonesia',
                'content' => 'Dalam rangka memperluas wawasan mahasidwa mengenai budaya kerja di perusahaan teknologi global, Program Studi TRPL akan mengadakan kunjungan industri ke kantor Google Indonesia. Peserta terbatas untuk 40 mahasiswa terpilih.',
                'status' => 'published',
                'category' => 'Kegiatan',
            ],
            [
                'title' => 'Pemanfaatan AI dalam Pengembangan Perangkat Lunak',
                'content' => 'Teknologi AI kini semakin masif digunakan dalam proses coding. Dosen-dosen TRPL melakukan penelitian mengenai bagaimana memanfaatkan AI secara etis dan produktif untuk meningkatkan kualitas perangkat lunak yang dibangun.',
                'status' => 'published',
                'category' => 'Teknologi',
            ],
            [
                'title' => 'Selamat kepada Pemenang Lomba Coding Nasional',
                'content' => 'Tim mahasiswa TRPL berhasil meraih juara pertama dalam ajang Lomba Coding Nasional yang diadakan di Jakarta. Kemenangan ini membuktikan kualitas dan daya saing mahasiswa TRPL di tingkat nasional.',
                'status' => 'published',
                'category' => 'Prestasi',
            ],
        ];

        foreach ($posts as $postData) {
            BlogPost::create([
                'title' => $postData['title'],
                'slug' => Str::slug($postData['title']),
                'content' => $postData['content'],
                'category' => $postData['category'],
                'author_id' => $dosens->random()->id,
                'status' => $postData['status'],
                'published_at' => now()->subDays(rand(1, 30)),
            ]);
        }
    }
}
