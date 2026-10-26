<?php

namespace Database\Seeders;

use App\Models\Book;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class BookSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {


        Book::create([
            'title' => 'Pulang',
            'description' => 'petualang pemuda',
            'price' => 40000,
            'stock' => 15,
            'cover_photo' => 'pulang.jpg',
            'genre_id' => 1,
            'author_id' => 1
        ]);

        Book::create([
            'title' => 'Seni Merias',
            'description' => 'Seni merias dalam kehidupan sehari hari',
            'price' => 20000,
            'stock' => 25,
            'cover_photo' => 'seni.jpg',
            'genre_id' => 1,
            'author_id' => 1
        ]);

        Book::create([
            'title' => 'Laskar Pelangi',
            'description' => 'Kisah perjuangan anak-anak Belitung meraih pendidikan',
            'price' => 50000,
            'stock' => 20,
            'cover_photo' => 'laskar-pelangi.jpg',
            'genre_id' => 3,
            'author_id' => 2
        ]);

        Book::create([
            'title' => 'Bumi',
            'description' => 'Petualangan Raib, Seli, dan Ali menjelajahi dunia paralel',
            'price' => 45000,
            'stock' => 18,
            'cover_photo' => 'bumi.jpg',
            'genre_id' => 2,
            'author_id' => 2
        ]);

        Book::create([
            'title' => 'Filosofi Teras',
            'description' => 'Pengantar filsafat Stoisisme untuk kehidupan sehari-hari',
            'price' => 60000,
            'stock' => 12,
            'cover_photo' => 'filosofi-teras.jpg',
            'genre_id' => 2,
            'author_id' => 3
        ]);
    }
}
