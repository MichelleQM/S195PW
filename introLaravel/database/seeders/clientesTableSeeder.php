<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class clientesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('clientes')->insert([
            [
                'nombre' => 'iIvan',
                'apellido' => 'Guerra',
                'correo' => 'iiguerra@gmail.com',
                'telefono' => '1234567890',
            ],[
                'nombre' => 'Michelle',
                'apellido' => 'Quintero',
                'correo' => 'correo1@gmail.com',
                'telefono' => '1234567890',
            ],[
                'nombre' => 'Maria',
                'apellido' => 'Lopez',
                'correo' => 'lopezm@gmail.com',
                'telefono' => '1234567890',
            ]
        ]); 
    }
}
