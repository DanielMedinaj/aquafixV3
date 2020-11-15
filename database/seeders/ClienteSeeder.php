<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class ClienteSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('clientes')->insert([
            'nombre' => 'Daniel Jesus',
            'apellidos' => 'Medina Avila',
            'noTel' => '9838399955',
            'correo' => 'ejemplo@gmail.com',
            'domicilio' => 'Calle Laguna de Bacalar 443A',
        ]);
    }
}
