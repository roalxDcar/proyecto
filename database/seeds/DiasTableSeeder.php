<?php

use Illuminate\Database\Seeder;
use App\Dia;

class DiasTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //Lunes a Viernes
        Dia::create([
            'id_detalle_dia'=>'1',
            'dia'=>'Lunes'
        ]);
        Dia::create([
            'id_detalle_dia'=>'1',
            'dia'=>'Martes'
        ]);
        Dia::create([
            'id_detalle_dia'=>'1',
            'dia'=>'Miercoles'
        ]);
        Dia::create([
            'id_detalle_dia'=>'1',
            'dia'=>'Jueves'
        ]);
        Dia::create([
            'id_detalle_dia'=>'1',
            'dia'=>'Viernes'
        ]);
        //Lunes a Domingo
        Dia::create([
        	'id_detalle_dia'=>'2',
        	'dia'=>'Lunes'
        ]);
        Dia::create([
        	'id_detalle_dia'=>'2',
        	'dia'=>'Martes'
        ]);
        Dia::create([
        	'id_detalle_dia'=>'2',
        	'dia'=>'Miercoles'
        ]);
        Dia::create([
        	'id_detalle_dia'=>'2',
        	'dia'=>'Jueves'
        ]);
        Dia::create([
        	'id_detalle_dia'=>'2',
        	'dia'=>'Viernes'
        ]);
        Dia::create([
        	'id_detalle_dia'=>'2',
        	'dia'=>'Sabado'
        ]);
        Dia::create([
        	'id_detalle_dia'=>'2',
        	'dia'=>'Domingo'
        ]);
        //Sabado y Domingo
        Dia::create([
            'id_detalle_dia'=>'3',
            'dia'=>'Sabado'
        ]);
        Dia::create([
            'id_detalle_dia'=>'3',
            'dia'=>'Domingo'
        ]);
        //Lunes, Miercoles Y Viernes
        Dia::create([
            'id_detalle_dia'=>'4',
            'dia'=>'Lunes'
        ]);
        Dia::create([
            'id_detalle_dia'=>'4',
            'dia'=>'Miercoles'
        ]);
        Dia::create([
            'id_detalle_dia'=>'4',
            'dia'=>'Viernes'
        ]);
    }
}
