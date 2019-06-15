<?php

use Illuminate\Database\Seeder;
use App\User;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
        	'id_rol' => 1,
        	'id_centro' => null,
        	'name' => 'Jhonn Gabriel',
        	'paterno'=>'Pacheco',
        	'materno'=>'Ventura',
        	'genero'=>'1',
        	'telefono'=>22215821,
        	'celular'=>71254721,
        	'ci'=>13405781,
        	'email'=>'gabriel@gmail.com',
        	'password'=>bcrypt(12345678),
        	'direccion'=>'Z/ Villa Adela'

        ]);
        User::create([
            'id_rol' => 2,
            'id_centro' => null,
            'name' => 'Alex Hayar',
            'paterno'=>'Aliaga',
            'materno'=>'Gutierrez',
            'genero'=>'1',
            'telefono'=>22417821,
            'celular'=>73164921,
            'ci'=>13408746,
            'email'=>'alex@gmail.com',
            'password'=>bcrypt(12345678),
            'direccion'=>'Z/ 1ro de Mayo'

        ]);
        User::create([
            'id_rol' => 3,
            'id_centro' => null,
            'name' => 'Brian',
            'paterno'=>'Caceres',
            'materno'=>'Mendoza',
            'genero'=>'1',
            'telefono'=>22528412,
            'celular'=>78549821,
            'ci'=>11245746,
            'email'=>'brian@gmail.com',
            'password'=>bcrypt(12345678),
            'direccion'=>'Z/ Villa Adela'

        ]);
        User::create([
            'id_rol' => 4,
            'id_centro' => null,
            'name' => 'Ronald',
            'paterno'=>'Mollericona',
            'materno'=>'Miranda',
            'genero'=>'1',
            'telefono'=>22125478,
            'celular'=>78549821,
            'ci'=>13215487,
            'email'=>'roalmollericona@gmail.com',
            'password'=>bcrypt(12345678),
            'direccion'=>'Z/ Pedro DOmingo Murillo C/ Gregorio garcia Lanza'

        ]);
    }
}
