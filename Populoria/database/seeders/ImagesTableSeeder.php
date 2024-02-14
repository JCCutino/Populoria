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
            'url' => 'images/projects/Don_Kamaron.png',
            'project_id' => 1,
        ]);

        Image::create([
            'url' => 'images/projects/mauroResized.jpeg',
            'project_id' => 1,
        ]);

        Image::create([
            'url' => 'images/projects/peaceo.jpg',
            'project_id' => 1,
        ]);

        Image::create([
            'url' => 'images/projects/unnamed.png',
            'project_id' => 1,
        ]);

        Image::create([
            'url' => 'images/projects/mauroResized.jpeg',
            'project_id' => 2,
        ]);

        Image::create([
            'url' => 'images/projects/mauroResized.jpeg',
            'project_id' => 3,
        ]);

        Image::create([
            'url' => 'images/projects/mauroResized.jpeg',
            'project_id' => 4,
        ]);
    }
}
