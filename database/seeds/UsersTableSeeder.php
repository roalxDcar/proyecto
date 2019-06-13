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
        	'id_rol' => 4,
        	'id_centro' => null,
        	'name' => 'Ronald',
        	'paterno'=>'Mollericona',
        	'materno'=>'Miranda',
        	'genero'=>'1',
        	'telefono'=>22457821,
        	'celular'=>78549821,
        	'ci'=>13408746,
        	'email'=>'roalmollericona@gmail.com',
        	'password'=>bcrypt(12345678),
        	'direccion'=>'Z/ Pedro DOmingo Murillo C/ Gregorio garcia Lanza'

        ]);    

        User::create([
        	'id_rol' => 4,
        	'id_centro' => null,
        	'name' => 'Hayar',
        	'paterno'=>'Aliaga',
        	'materno'=>'Gutierrez',
        	'genero'=>'1',
        	'telefono'=>22457821,
        	'celular'=>78549821,
        	'ci'=>13408746,
        	'email'=>'hayaralexaliagagutierrez@gmail.com',
        	'password'=>bcrypt(12345678),
        	'direccion'=>'Z/ Pedro DOmingo Murillo C/ Gregorio garcia Lanza'

        ]);
    }
}
