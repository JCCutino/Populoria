<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Project;

class ProjectsTableSeeder extends Seeder
{
    public function run()
    {
        Project::create([
            'name' => 'Project 1',
            'description' => 'Description for Project 1',
            'looking' => 'Looking for something...',
            'progress' => 'In progress',
        ]);

    }
}
