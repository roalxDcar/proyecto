<?php

use Illuminate\Database\Seeder;
use App\Rol;

class RolsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Rol::create([
            'descripcion' => 'Usuario'
        ]);
        Rol::create([
        	'descripcion' => 'Administrador'
        ]);
        Rol::create([
            'descripcion' => 'Empleado'
        ]);
        Rol::create([
            'descripcion' => 'Admin'
        ]);
    }
}
