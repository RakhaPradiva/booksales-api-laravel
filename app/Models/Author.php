<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Author extends Model
{
    private $authors = [
        [
            'name' => 'Tere Liye',
            'photo' => 'tere-liye.jpg',
            'bio' => 'Penulis Indonesia yang dikenal melalui novel-novel populer dengan tema keluarga, persahabatan, dan kehidupan.'
        ],
        [
            'name' => 'Andrea Hirata',
            'photo' => 'andrea-hirata.jpg',
            'bio' => 'Novelis asal Belitung yang banyak mengangkat kisah pendidikan dan kehidupan masyarakat di kampung halamannya.'
        ],
        [
            'name' => 'Dee Lestari',
            'photo' => 'dee-lestari.jpg',
            'bio' => 'Penulis dan musisi Indonesia yang menghasilkan karya fiksi dengan tema humanisme, kehidupan, dan pencarian jati diri.'
        ],
        [
            'name' => 'Pramoedya Ananta Toer',
            'photo' => 'pramoedya-ananta-toer.jpg',
            'bio' => 'Sastrawan Indonesia yang dikenal lewat karya-karya berlatar sejarah dan kehidupan sosial masyarakat.'
        ],
        [
            'name' => 'J. S. Khairen',
            'photo' => 'js-khairen.jpg',
            'bio' => 'Penulis Indonesia yang menulis novel dan cerita dengan gaya segar, serta kerap mengangkat kehidupan anak muda.'
        ],
    ];

    public function getAuthors()
    {
        return $this->authors;
    }
}
