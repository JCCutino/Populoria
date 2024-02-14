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
    }
}
