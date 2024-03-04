<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Category;

class CategoriesTableSeeder extends Seeder
{
    public function run()
    {
        Category::create(['name' => 'Laravel', 'color' => '#ff0000']);
        Category::create(['name' => 'JavaScript', 'color' => '#8000FF']);
        Category::create(['name' => 'CSS', 'color' => '#D394E9']);
        Category::create(['name' => 'PHP', 'color' => '#B594E9']);
        Category::create(['name' => 'SQL', 'color' => '#F05340']);
        Category::create(['name' => 'Phyton', 'color' => '#A9DFBF']);
        Category::create(['name' => 'React', 'color' => '#A2D9CE']);
        Category::create(['name' => 'Vue', 'color' => '#A3E4D7']);
        Category::create(['name' => 'Node.js', 'color' => '#AED6F1']);
    }
}
