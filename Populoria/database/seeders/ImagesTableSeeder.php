<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Image;

class ImagesTableSeeder extends Seeder
{
    public function run()
    {
        Image::create([
            'url' => 'images/Populoria.svg',
            'project_id' => 2,
        ]);

        Image::create([
            'url' => 'images/projects/mauroResized.jpeg',
            'project_id' => 2,
        ]);

        Image::create([
            'url' => 'images/projects/peaceo.jpg',
            'project_id' => 2,
        ]);

        Image::create([
            'url' => 'images/projects/unnamed.png',
            'project_id' => 2,
        ]);

        Image::create([
            'url' => 'images/projects/logo.png',
            'project_id' => 3,
        ]);

        Image::create([
            'url' => 'images/projects/mauroResized.jpeg',
            'project_id' => 4,
        ]);

        Image::create([
            'url' => 'images/projects/mauroResized.jpeg',
            'project_id' => 5,
        ]);
    }
}
