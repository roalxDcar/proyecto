<?php

use Illuminate\Database\Seeder;
use App\EstadoCancha;

class EstadocanchasTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        EstadoCancha::create([
            'descripcion' => 'Mantenimiento'
        ]);
        EstadoCancha::create([
        	'descripcion' => 'Disponible'
        ]);
        EstadoCancha::create([
            'descripcion' => 'Libre'
        ]);
    }
}
