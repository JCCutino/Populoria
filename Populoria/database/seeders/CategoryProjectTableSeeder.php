<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategoryProjectTableSeeder extends Seeder
{
    public function run()
    {
        DB::table('category_project')->insert([
            'category_id' => 1,
            'project_id' => 1,
        ]);
        DB::table('category_project')->insert([
            'category_id' => 2,
            'project_id' => 1,
        ]);
        DB::table('category_project')->insert([
            'category_id' => 3,
            'project_id' => 1,
        ]);
        DB::table('category_project')->insert([
            'category_id' => 4,
            'project_id' => 1,
        ]);
        DB::table('category_project')->insert([
            'category_id' => 5,
            'project_id' => 1,
        ]);
        DB::table('category_project')->insert([
            'category_id' => 6,
            'project_id' => 1,
        ]);
        DB::table('category_project')->insert([
            'category_id' => 7,
            'project_id' => 2,
        ]);
        DB::table('category_project')->insert([
            'category_id' => 1,
            'project_id' => 3,
        ]);
        DB::table('category_project')->insert([
            'category_id' => 2,
            'project_id' => 4,
        ]);
    }
}
