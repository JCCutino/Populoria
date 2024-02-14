<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategoryUserTableSeeder extends Seeder
{
    public function run()
    {
        DB::table('category_user')->insert([
            'user_id' => 1,
            'category_id' => 1,
        ]);
        DB::table('category_user')->insert([
            'user_id' => 2,
            'category_id' => 2,
        ]);
    }
}