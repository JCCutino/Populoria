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
        DB::table('category_user')->insert([
            'user_id' => 3,
            'category_id' => 3,
        ]);

        DB::table('category_user')->insert([
            'user_id' => 3,
            'category_id' => 1,
        ]);

        DB::table('category_user')->insert([
            'user_id' => 4,
            'category_id' => 4,
        ]);
       
        DB::table('category_user')->insert([
            'user_id' => 5,
            'category_id' => 6,
        ]);
        
        DB::table('category_user')->insert([
            'user_id' => 5,
            'category_id' => 7,
        ]);
        DB::table('category_user')->insert([
            'user_id' => 5,
            'category_id' => 8,
        ]);
        DB::table('category_user')->insert([
            'user_id' => 5,
            'category_id' => 9,
        ]);

    }
}