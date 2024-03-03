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
            'name'=> 'chat',
            'description' => 'Esto es un foro',
            'looking' => 'Ya me he cansado de inventar cosas',
            'progress' => 'Finalizado',
        ]);

        Project::create([
            'name' => 'Populoria',
            'description' => 'Populoria Hub se presenta como la vanguardia en la colaboración creativa al conectar a programadores y diseñadores a través de ideas de proyectos emocionantes. Esta plataforma, bajo el nombre de Populoria, tiene como objetivo principal actuar como el epicentro donde las ideas innovadoras cobran vida gracias a la sinergia entre creadores y profesionales en desarrollo y diseño.',
            'looking' => 'Bueno chavales estamos haciendo un proyectito para Pedro, que no le han gustado las últimas entregas, pero más le vale que le guste ésta, bueno, necesitamos alguien para el front-end, un Maricón, un Gay, un Bujarra, alguien que sepa de laravel y un Guapo (Rafa)',
            'progress' => 'Activo',
        ]);

        Project::create([
            'name' => 'EcoTech',
            'description' => 'La empresa se basa en la comercialización de productos que faciliten la vida de las personas, especialmente en el sector agrícola, de una forma respetuosa con el medio ambiente. Nuestra meta es que cada vez más se unan a nuestra iniciativa para cuidar nuestro planeta.',
            'looking' => 'Se buscan valientes que quieran hacer de este mundo un lugar más ecológico',
            'progress' => 'Activo',
        ]);

        Project::create([
            'name' => 'Anti-Populoria',
            'description' => 'Populoria Hub NO se presenta como la vanguardia en la colaboración creativa al conectar a programadores y diseñadores a través de ideas de proyectos emocionantes.',
            'looking' => 'No se busca nada',
            'progress' => 'Activo',
        ]);

        Project::create([
            'name' => 'Populoria',
            'description' => 'Ya me he cansado de inventar cosas',
            'looking' => 'Ya me he cansado de inventar cosas',
            'progress' => 'Finalizado',
        ]);
    }
}
