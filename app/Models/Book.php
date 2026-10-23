<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    private $books = [
        [
            'title' => 'Pulang',
            'description' => 'petualang pemuda',
            'price' => 40000,
            'stock' => 15,
            'cover_photo' => 'pulang.jpg',
            'genre_id' => 1,
            'author_id' => 1
        ],
        [
            'title' => 'Seni Merias',
            'description' => 'Seni merias dalam kehidupan sehari hari',
            'price' => 20000,
            'stock' => 25,
            'cover_photo' => 'seni.jpg',
            'genre_id' => 1,
            'author_id' => 1
        ],
        [
            'title' => 'Laskar Pelangi',
            'description' => 'Kisah perjuangan anak-anak Belitung meraih pendidikan',
            'price' => 50000,
            'stock' => 20,
            'cover_photo' => 'laskar-pelangi.jpg',
            'genre_id' => 3,
            'author_id' => 2
        ],
        [
            'title' => 'Bumi',
            'description' => 'Petualangan Raib, Seli, dan Ali menjelajahi dunia paralel',
            'price' => 45000,
            'stock' => 18,
            'cover_photo' => 'bumi.jpg',
            'genre_id' => 2,
            'author_id' => 2
        ],
        [
            'title' => 'Filosofi Teras',
            'description' => 'Pengantar filsafat Stoisisme untuk kehidupan sehari-hari',
            'price' => 60000,
            'stock' => 12,
            'cover_photo' => 'filosofi-teras.jpg',
            'genre_id' => 2,
            'author_id' => 3
        ],
    ];

    public function getBooks(){
        return $this->books;
    }
}
