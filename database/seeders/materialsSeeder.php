<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Material;

class materialsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Material::insert([
            [
                'nombre' => 'ACERO 316',
                'descripcion' => '',
            ],
            [
                'nombre' => 'Acero inoxidable',
                'descripcion' => '',
            ],
        
        ]);
        
    }
}
