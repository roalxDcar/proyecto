<?php

use Illuminate\Database\Seeder;
use App\Detalledia;

class DetallediasTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        Detalledia::create([
        	'descripcion'=>'Lunes a Viernes'
        ]);
        Detalledia::create([
        	'descripcion'=>'Lunes a Domingo'
        ]);
        Detalledia::create([
        	'descripcion'=>'Sabado a Domingo'
        ]);
        Detalledia::create([
        	'descripcion'=>'Lunes,Miercoles y Viernes'
        ]);
    }
}
