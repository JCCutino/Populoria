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
    }
}