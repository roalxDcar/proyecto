<?php

use Illuminate\Database\Seeder;
use App\Valoracion;

class ValoracionesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        Valoracion::create([
        	'descripcion' => 'Solo con lo indispensable'
        ]);
        Valoracion::create([
        	'descripcion' => 'Servicio e infraestructura basico'
        ]);
        Valoracion::create([
        	'descripcion' => 'Instalacion adecuada,servicios completos y estandarizado sin grandes lujos'
        ]);
        Valoracion::create([
        	'descripcion' => 'Instalaciones de lujo y servicio superior'
        ]);
        Valoracion::create([
        	'descripcion' => 'Instalaciones y servicios excepcionales'
        ]);
    }
}
