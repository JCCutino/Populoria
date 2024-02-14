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
        Category::create(['name' => 'Maricón', 'color' => '#8000FF']);
        Category::create(['name' => 'Gay', 'color' => '#D394E9']);
        Category::create(['name' => 'Bujarra', 'color' => '#B594E9']);
        Category::create(['name' => 'Laravel', 'color' => '#F05340']);
        Category::create(['name' => 'Guapo', 'color' => '#A9DFBF']);
        Category::create(['name' => 'Listo', 'color' => '#A2D9CE']);
        Category::create(['name' => 'Aplicado', 'color' => '#A3E4D7']);
        Category::create(['name' => 'Ordenado', 'color' => '#AED6F1']);
    }
}
