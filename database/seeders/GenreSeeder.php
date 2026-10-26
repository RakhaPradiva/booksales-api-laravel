<?php

namespace Database\Seeders;


use Illuminate\Database\Seeder;
use App\Models\Genre;

class GenreSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //

        Genre::create([
            'name' => 'Romansa',
            'description' => 'Kisah tentang cinta, hubungan, dan perjalanan perasaan'
        ]);

        Genre::create([
            'name' => 'Fantasi',
            'description' => 'Cerita dengan dunia imajinatif, sihir, atau makhluk ajaib.'
        ]);
        Genre::create([
            'name' => 'Misteri',
            'description' => 'Cerita yang mengajak pembaca mengungkap teka-teki atau rahasia.'
        ]);

        Genre::create([
            'name' => 'Petualangan',
            'description' => 'Kisah perjalanan penuh tantangan, penemuan, dan pengalaman baru.'
        ]);

        Genre::create([
            'name' => 'Fiksi Ilmiah',
            'description' => 'Cerita tentang sains, teknologi, dan kemungkinan masa depan.'
        ]);
    }
}
