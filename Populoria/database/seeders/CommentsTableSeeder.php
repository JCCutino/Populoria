<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Comment;
use App\Models\User;
use App\Models\Project;

class CommentsTableSeeder extends Seeder
{
    public function run()
    {
        Comment::create([
            'text' => 'Sois tontos y gays que lo sepáis.',
            'user_id' => 2,
            'project_id' => 1,
        ]);
    }
}
