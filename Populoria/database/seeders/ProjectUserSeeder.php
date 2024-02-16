<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProjectUserSeeder extends Seeder
{
    public function run()
    {
        DB::table('project_user')->insert([
            'project_id' => 2,
            'user_id' => 5,
            'status' => "owner",
        ]);
        
        DB::table('project_user')->insert([
            'project_id' => 2,
            'user_id' => 3,
            'status' => "accepted",
        ]);

        DB::table('project_user')->insert([
            'project_id' => 2,
            'user_id' => 4,
            'status' => "accepted",
        ]);

        DB::table('project_user')->insert([
            'project_id' => 2,
            'user_id' => 2,
            'status' => "accepted",
        ]);

        DB::table('project_user')->insert([
            'project_id' => 3,
            'user_id' => 1,
            'status' => "owner",
        ]);

        DB::table('project_user')->insert([
            'project_id' => 4,
            'user_id' => 1,
            'status' => "owner",
        ]);

        DB::table('project_user')->insert([
            'project_id' => 5,
            'user_id' => 1,
            'status' => "owner",
        ]);
    }
}
