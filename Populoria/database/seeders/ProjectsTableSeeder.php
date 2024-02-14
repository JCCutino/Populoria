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
            'name' => 'Populoria',
            'description' => 'Populoria Hub se presenta como la vanguardia en la colaboración creativa al conectar a programadores y diseñadores a través de ideas de proyectos emocionantes. Esta plataforma, bajo el nombre de Populoria, tiene como objetivo principal actuar como el epicentro donde las ideas innovadoras cobran vida gracias a la sinergia entre creadores y profesionales en desarrollo y diseño.',
            'looking' => 'Necesitamos 4 desarrolladores web full stack',
            'progress' => 'En progreso mi amor',
        ]);
    }
}
