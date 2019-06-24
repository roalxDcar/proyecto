<?php

use Illuminate\Database\Seeder;
use App\Deporte;

class DeportesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        Deporte::create([
            'nombre' => 'Wally'
        ]);
        Deporte::create([
            'nombre' => 'Voley'
        ]);
        Deporte::create([
        	'nombre' => 'Futsal'
        ]);
        Deporte::create([
            'nombre' => 'Futbolito'
        ]);
        Deporte::create([
            'nombre' => 'Raquet'
        ]);
    }
}
