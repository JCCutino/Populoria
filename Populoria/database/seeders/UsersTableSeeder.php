<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class UsersTableSeeder extends Seeder
{
    public function run()
    {
        User::create([
            'name' => 'Admin',
            'email' => 'admin@admin.com',
            'password' => Hash::make('admin'),
            'image' =>  'images/users/default-icon.webp',
            'about' => 'Soy el admin chavales',
            'admin' => true,
        ]);

        User::create([
            'name' => 'Luis Verga',
            'email' => 'Luis@Verga.com',
            'password' => Hash::make('Luis'),
            'image' =>  'images/users/Yo.JPG',
            'about' => 'Joder soy Luis motherfuking Verga',
            'admin' => false,
        ]);

        User::create([
            'name' => 'Torovi',
            'email' => 'Torovi@Maricon.es',
            'password' => Hash::make('Torovi'),
            'image' =>  'images/users/gitano.webp',
            'about' => 'Heeeyyy nena ¿Quieres sexo del prematuro?',
            'admin' => false,
        ]);

        User::create([
            'name' => 'Cutiman',
            'email' => 'Cuti@Man.org',
            'password' => Hash::make('Cutiman'),
            'image' =>  'images/users/cutiman.jpg',
            'about' => 'Hey tios, me encanta robar trabajos y romper dedos, un saludo.',
            'admin' => false,
        ]);

        User::create([
            'name' => 'Rafax',
            'email' => 'Rafa@Guapisimo.sexual',
            'password' => Hash::make('Rafax'),
            'image' =>  'images/users/prros.jpg',
            'about' => 'Bueno que decir del mejor y más guapo desarrollador de Ilerna Sevilla y de Atexis',
            'admin' => false,
        ]);
    }
}