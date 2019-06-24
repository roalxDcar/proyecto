<?php

use Illuminate\Database\Seeder;
use App\Turno;

class TurnosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        Turno::create([
            'descripcion' => 'Mañana / 08:00 a 12:00'
        ]);
        Turno::create([
            'descripcion' => 'Tarde / 15:00 a 22:00'
        ]);
        Turno::create([
            'descripcion' => 'Todo el dia / 08:00 a 22:00'
        ]);
    }
}
