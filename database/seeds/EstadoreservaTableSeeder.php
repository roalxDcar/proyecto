<?php

use Illuminate\Database\Seeder;
use App\Estadoreserva;

class EstadoreservaTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        Estadoreserva::create([
        	'estado' => 'Reservado'
        ]);
        Estadoreserva::create([
        	'estado' => 'Ocupado'
        ]);
        Estadoreserva::create([
            'estado' => 'Libre'
        ]);
    }
}
