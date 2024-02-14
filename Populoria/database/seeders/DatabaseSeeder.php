<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{

    public function run()
    {
        $this->call(CategoriesTableSeeder::class);
        $this->call(UsersTableSeeder::class);
        $this->call(ProjectsTableSeeder::class);
        $this->call(ImagesTableSeeder::class);
        $this->call(CategoryProjectTableSeeder::class);
        $this->call(CategoryUserTableSeeder::class);
        $this->call(CommentsTableSeeder::class);
        $this->call(ProjectUserSeeder::class);
    }
}
