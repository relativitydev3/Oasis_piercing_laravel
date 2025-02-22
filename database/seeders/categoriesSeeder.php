<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Category;

class categoriesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Category::insert([
            [
                'nombre' => 'Nariz',
                'descripcion' => 'Nariz',
                'estado' => 'Activo',
                'imagen' => '1',
            ],
            [
                'nombre' => 'Oreja',
                'descripcion' => 'Oreja',
                'estado' => 'Activo',
                'imagen' => '1',
            ],
            [
                'nombre' => 'Boca',
                'descripcion' => 'Boca',
                'estado' => 'Activo',
                'imagen' => '1',
            ],
            [
                'nombre' => 'Labios',
                'descripcion' => 'Labios',
                'estado' => 'Activo',
                'imagen' => '1',
            ],
            [
                'nombre' => 'Ceja',
                'descripcion' => 'Ceja',
                'estado' => 'Activo',
                'imagen' => '1',
            ],
            [
                'nombre' => 'Pezoneras',
                'descripcion' => 'Pezoneras',
                'estado' => 'Activo',
                'imagen' => '1',
            ],
        ]);
    
    }
}
