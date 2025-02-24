<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\SalesStatus;

class SalesStatusSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        SalesStatus::insert([
            [
                'name' => 'En Cola',
                'description' => '',
            ],
            [
                'name' => 'En Proceso',
                'description' => '',
            ],
            [
                'name' => 'En camino',
                'description' => '',
            ],
            [
                'name' => 'Entregado',
                'description' => '',
            ],
            [
                'name' => 'Cancelado',
                'description' => '',
            ],
        ]);
        
    }
}
