<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class EstadosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('estados')->insert([
            'estado'       => 'Aguascalientes',
            'monto' => 639.69,
        ]);

        DB::table('estados')->insert([
            'estado'       => 'Baja California',
            'monto' => 384.26,
        ]);

        DB::table('estados')->insert([
            'estado'       => 'Baja California Sur',
            'monto' => 639.69,
        ]);

        DB::table('estados')->insert([
            'estado'       => 'Campeche',
            'monto' => 323.63,
        ]);

        DB::table('estados')->insert([
            'estado'       => 'Chiapas',
            'monto' => 767.69,
        ]);

        DB::table('estados')->insert([
            'estado'       => 'Chihuahua',
            'monto' => 310.89,
        ]);

        DB::table('estados')->insert([
            'estado'       => 'Coahuila',
            'monto' => 767.69,
        ]);

        DB::table('estados')->insert([
            'estado'       => 'Colima',
            'monto' => 518.95,
        ]);

        DB::table('estados')->insert([
            'estado'       => 'Distrito Federal',
            'monto' => 301.69,
        ]);

        DB::table('estados')->insert([
            'estado'       => 'Durango',
            'monto' => 301.69,
        ]);

        DB::table('estados')->insert([
            'estado'       => 'Guanajuato',
            'monto' => 276.88,
        ]);

        DB::table('estados')->insert([
            'estado'       => 'Guerrero',
            'monto' => 276.88,
        ]);

        DB::table('estados')->insert([
            'estado'       => 'Hidalgo',
            'monto' => 286.75,
        ]);

        DB::table('estados')->insert([
            'estado'       => 'Jalisco',
            'monto' => 150.97,
        ]);

        DB::table('estados')->insert([
            'estado'       => 'México',
            'monto' => 408.50,
        ]);

        DB::table('estados')->insert([
            'estado'       => 'Michoacán',
            'monto' => 276.88,
        ]);

        DB::table('estados')->insert([
            'estado'       => 'Morelos',
            'monto' => 286.75,
        ]);

        DB::table('estados')->insert([
            'estado'       => 'Nayarit',
            'monto' => 240.82,
        ]);

        DB::table('estados')->insert([
            'estado'       => 'Nuevo León',
            'monto' => 462.3,
        ]);

        DB::table('estados')->insert([
            'estado'       => 'Oaxaca',
            'monto' => 310.89,
        ]);

        DB::table('estados')->insert([
            'estado'       => 'Puebla',
            'monto' => 374.53,
        ]);

        DB::table('estados')->insert([
            'estado'       => 'Querétaro',
            'monto' => 276.88,
        ]);

        DB::table('estados')->insert([
            'estado'       => 'Quintana Roo',
            'monto' => 323.63,
        ]);

        DB::table('estados')->insert([
            'estado'       => 'San Luis Potosí',
            'monto' => 276.88,
        ]);
        DB::table('estados')->insert([
            'estado'       => 'Sinaloa',
            'monto' => 276.88,
        ]);

        DB::table('estados')->insert([
            'estado'       => 'Sonora',
            'monto' => 310.89,
        ]);
        DB::table('estados')->insert([
            'estado'       => 'Tabasco',
            'monto' => 310.89,
        ]);

        DB::table('estados')->insert([
            'estado'       => 'Tamaulipas',
            'monto' => 310.89,
        ]);
        DB::table('estados')->insert([
            'estado'       => 'Tlaxcala',
            'monto' => 286.75,
        ]);
        DB::table('estados')->insert([
            'estado'       => 'Veracruz',
            'monto' => 310.89,
        ]);
        DB::table('estados')->insert([
            'estado'       => 'Yucatán',
            'monto' => 323.63,
        ]);
        DB::table('estados')->insert([
            'estado'       => 'Zacatecas',
            'monto' => 276.88,
        ]);

    }
}
