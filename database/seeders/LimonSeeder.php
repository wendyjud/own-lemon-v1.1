<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class LimonSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Nos permiten la insersión de datos desde que carga el archivo para los productos a vender y sus precios

        DB::table('limones')->insert([
            'tipo'       => 'Italiano',
            'precio' => 26.70,
        ]);
        DB::table('limones')->insert([
            'tipo'       => 'Mexicano',
            'precio' => 29.90,
        ]);
        DB::table('limones')->insert([
            'tipo'       => 'Persa',
            'precio' => 24.90,
        ]);
    }
}
