<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Category;

class CategoriesTableSeeder extends Seeder
{
    public function run()
    {
        Category::create(['name' => 'Front-end', 'color' => '#ff0000']);
        Category::create(['name' => 'Back-end', 'color' => '#00ff00']);
        Category::create(['name' => 'Java', 'color' => '#0000ff']);
        
    }
}
