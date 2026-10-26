<?php

namespace Database\Seeders;

use App\Models\Author;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AuthorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //

        Author::create([
            'name' => 'Tere Liye',
            'photo' => 'tere-liye.jpg',
            'bio' => 'Penulis Indonesia yang dikenal melalui novel-novel populer dengan tema keluarga, persahabatan, dan kehidupan.'
        ]);

        Author::create([
            'name' => 'Andrea Hirata',
            'photo' => 'andrea-hirata.jpg',
            'bio' => 'Novelis asal Belitung yang banyak mengangkat kisah pendidikan dan kehidupan masyarakat di kampung halamannya.'
        ]);

        Author::create([
            'name' => 'J. S. Khairen',
            'photo' => 'js-khairen.jpg',
            'bio' => 'Penulis Indonesia yang menulis novel dan cerita dengan gaya segar, serta kerap mengangkat kehidupan anak muda.'
        ]);

        Author::create([
            'name' => 'Pramoedya Ananta Toer',
            'photo' => 'pramoedya-ananta-toer.jpg',
            'bio' => 'Sastrawan Indonesia yang dikenal lewat karya-karya berlatar sejarah dan kehidupan sosial masyarakat.'
        ]);

        Author::Create([
            'name' => 'Dee Lestari',
            'photo' => 'dee-lestari.jpg',
            'bio' => 'Penulis dan musisi Indonesia yang menghasilkan karya fiksi dengan tema humanisme, kehidupan, dan pencarian jati diri.'
        ]);
    }
}
