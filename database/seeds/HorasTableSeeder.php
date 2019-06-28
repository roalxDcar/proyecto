<?php

use Illuminate\Database\Seeder;
use App\Hora;

class HorasTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        Hora::create([
        	'id_turno'=>'1',
            'hora' => '09:00 - 10:00'
        ]);
        Hora::create([
        	'id_turno'=>'1',
            'hora' => '10:00 - 11:00'
        ]);
        Hora::create([
        	'id_turno'=>'1',
            'hora' => '11:00 - 12:00'
        ]);
        Hora::create([
        	'id_turno'=>'2',
            'hora' => '15:00 - 16:00'
        ]);
        Hora::create([
        	'id_turno'=>'2',
            'hora' => '16:00 - 17:00'
        ]);
        Hora::create([
        	'id_turno'=>'2',
            'hora' => '17:00 - 18:00'
        ]);
        Hora::create([
        	'id_turno'=>'2',
            'hora' => '18:00 - 19:00'
        ]);
        Hora::create([
        	'id_turno'=>'2',
            'hora' => '19:00 - 20:00'
        ]);
        Hora::create([
        	'id_turno'=>'2',
            'hora' => '20:00 - 21:00'
        ]);
        Hora::create([
        	'id_turno'=>'2',
            'hora' => '21:00 - 22:00'
        ]);
        Hora::create([
            'id_turno'=>'3',
            'hora' => '08:00 - 09:00'
        ]);
        Hora::create([
            'id_turno'=>'3',
            'hora' => '09:00 - 10:00'
        ]);
        Hora::create([
            'id_turno'=>'3',
            'hora' => '10:00 - 11:00'
        ]);
        Hora::create([
            'id_turno'=>'3',
            'hora' => '11:00 - 12:00'
        ]);
        Hora::create([
            'id_turno'=>'3',
            'hora' => '15:00 - 16:00'
        ]);
        Hora::create([
            'id_turno'=>'3',
            'hora' => '16:00 - 17:00'
        ]);
        Hora::create([
            'id_turno'=>'3',
            'hora' => '17:00 - 18:00'
        ]);
        Hora::create([
            'id_turno'=>'3',
            'hora' => '18:00 - 19:00'
        ]);
        Hora::create([
            'id_turno'=>'3',
            'hora' => '19:00 - 20:00'
        ]);
        Hora::create([
            'id_turno'=>'3',
            'hora' => '20:00 - 21:00'
        ]);
    }
}
