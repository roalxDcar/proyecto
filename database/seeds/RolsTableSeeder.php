<?php

use App\Rol;
use Illuminate\Database\Seeder;

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
        	'descripcion' => 'Usuario',
        ]);
        Rol::create([
            'descripcion' => 'Administrador',
        ]);
        Rol::create([
            'descripcion' => 'Empleado',
        ]);
    }
}
