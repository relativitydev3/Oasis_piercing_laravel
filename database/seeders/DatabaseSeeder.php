<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        User::insert([
            [
                'name' => 'Johan Andres',
                'last_name' => 'Rojas Naranjo',
                'CC' => '1017272862',
                'email' => '1017272862@gmail.com',
                'password' => bcrypt('password'),
            ],
            [
                'name' => 'Maria Camila',
                'last_name' => 'Alzate Sanchez',
                'CC' => '1000535404',
                'email' => '1000535404@gmail.com',
                'password' => bcrypt('1000535404'),
            ],
            [
                'name' => 'Mariana Saldarriaga',
                'last_name' => 'Montoya ',
                'CC' => '1000873589',
                'email' => '1000873589@gmail.com',
                'password' => bcrypt('1000873589'),
            ],
        ]);
    }
}
