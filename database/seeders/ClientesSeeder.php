<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ClientesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('clientes')->insert([
            ['rut'=>'11111111-1','nombre'=>'Bruno','apellido'=>'Filippi'],
            ['rut'=>'22222222-2','nombre'=>'Dagoberto','apellido'=>'Cabrera'],
            ['rut'=>'33333333-3','nombre'=>'Carlos','apellido'=>'Alten'],
        ]);
    }
}
