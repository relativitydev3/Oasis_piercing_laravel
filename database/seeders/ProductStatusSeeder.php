<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\ProductStatus;

class ProductStatusSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        ProductStatus::insert([
            [
                'name' => 'Activo',
                'description' => 'Activo',
            ],
            [
                'name' => 'Inactivo',
                'description' => '',
            ],
            [
                'name' => 'En oferta',
                'description' => '',
            ],
            [
                'name' => 'Nuevo',
                'description' => '',
            ],
        ]);

    }
}
