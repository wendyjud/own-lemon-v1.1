<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Nos permite la insersión de usuarios por default, útil para el administrador que ya debe contar con una cuenta especial.
        DB::table('users')->insert([
            'name'       => 'Own Lemon',
            'ap_Paterno' =>'Lemon',
            'ap_Materno' =>'Enterprise',
            'tel'        =>'5521555557',
            'email'      =>'admin@ownlemon.com',
            'password'   =>'admin123',
            'tipo'       =>1,

        ]);
    }
}
