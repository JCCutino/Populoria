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
            'admin' => true,
        ]);

        User::create([
            'name' => 'Luis Verga',
            'email' => 'Luis@Verga.com',
            'password' => Hash::make('Luis'),
            'image' =>  'images/users/Yo.JPG',
            'admin' => false,
        ]);
    }
}