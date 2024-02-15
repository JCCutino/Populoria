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
            'project_id' => 2,
        ]);
        Comment::create([
            'text' => 'Tonto y gay lo serás tu hijo de puta',
            'user_id' => 3,
            'project_id' => 2,
        ]);
        Comment::create([
            'text' => 'Ten cojones a decirmelo a la cara puto subnormal, ¿Quién coño te crees subiendo una foto con una metralleta hermano?',
            'user_id' => 2,
            'project_id' => 2,
        ]);
        Comment::create([
            'text' => 'Mira hijo de la gran puta como te pille por la calle te vas a entrar puto Luis Verga de los cojones',
            'user_id' => 3,
            'project_id' => 2,
        ]);
        Comment::create([
            'text' => 'Me pregunto a quien le podré robar el trabajo hoy...',
            'user_id' => 4,
            'project_id' => 2,
        ]);
        Comment::create([
            'text' => 'Chicos ya he acabado la página web de forma prematura totalmente solo y en un día, un saludo',
            'user_id' => 5,
            'project_id' => 2,
        ]);
    }
}
