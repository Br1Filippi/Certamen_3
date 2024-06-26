<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illumiante\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UsuariosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('usuarios')->insert([
            ['email'=>'MrBoss@yahoo.cl','password'=>Hask::make('Smile'),'nombre'=>'MrBoss','activo'=>true,'rol_id'=>1],
            ['email'=>'Alan@gmail.com','password'=>Hask::make('Cheese'),'nombre'=>'Alan','activo'=>true,'rol_id'=>1],
            ['email'=>'Charlie@gmail.com','password'=>Hask::make('911 Inside Job'),'nombre'=>'Charlie','activo'=>true,'rol_id'=>2],
            ['email'=>'Pim@hotmail.com','password'=>Hask::make('ILoveCharlie'),'nombre'=>'Pim','activo'=>true,'rol_id'=>2],
        ]);
    }
}
