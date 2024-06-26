<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UsuariosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('usuarios')->insert([
            ['email' => 'MrBoss@yahoo.cl', 'password' => Hash::make('Smile'), 'nombre' => 'MrBoss', 'activo' => true, 'perfil_id' => 1],
            ['email' => 'Alan@gmail.com', 'password' => Hash::make('Cheese'), 'nombre' => 'Alan', 'activo' => true, 'perfil_id' => 1],
            ['email' => 'Charlie@gmail.com', 'password' => Hash::make('911 Inside Job'), 'nombre' => 'Charlie', 'activo' => true, 'perfil_id' => 2],
            ['email' => 'Pim@hotmail.com', 'password' => Hash::make('ILoveCharlie'), 'nombre' => 'Pim', 'activo' => true, 'perfil_id' => 2],
        ]);
    }
}
