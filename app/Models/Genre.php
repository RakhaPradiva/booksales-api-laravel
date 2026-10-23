<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Genre extends Model
{
    private $genres = [
        [
            'name' => 'Romansa',
            'description' => 'Kisah tentang cinta, hubungan, dan perjalanan perasaan.'
        ],
        [
            'name' => 'Fantasi',
            'description' => 'Cerita dengan dunia imajinatif, sihir, atau makhluk ajaib.'
        ],
        [
            'name' => 'Misteri',
            'description' => 'Cerita yang mengajak pembaca mengungkap teka-teki atau rahasia.'
        ],
        [
            'name' => 'Fiksi Ilmiah',
            'description' => 'Cerita tentang sains, teknologi, dan kemungkinan masa depan.'
        ],
        [
            'name' => 'Petualangan',
            'description' => 'Kisah perjalanan penuh tantangan, penemuan, dan pengalaman baru.'
        ],
    ];

    public function getGenres()
    {
        return $this->genres;
    }
}
