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
        	'description' => 'Usuario',
        ]);
        Rol::create([
            'description' => 'Administrador',
        ]);
        Rol::create([
            'description' => 'Empleado',
        ]);
    }
}
