<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $data = array([
            'image' => 'admin', 
            'name' => 'admin', 
            'email'=> 'admin@gmail.com', 
            'role' => 'admin',
            'password'=> Hash::make('123'),
        ],
        [
            'image' => 'zaini', 
            'name' => 'zaini', 
            'email'=> 'zhyyevo@gmail.com', 
            'role' => 'admin',
            'password'=> Hash::make('123'),
        ],
        [
            'image' => 'butak', 
            'name' => 'butak', 
            'email'=> 'butak@gmail.com', 
            'role' => 'pengguna',
            'password'=> Hash::make('123'),
        ],
        [
            'image' => 'user', 
            'name' => 'user', 
            'email'=> 'user@gmail.com', 
            'role' => 'pengguna',
            'password'=> Hash::make('123'),
        ]);
        User::insert($data);
    }
}
