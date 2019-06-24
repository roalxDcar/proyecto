<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        //$this->call(UsersTableSeeder::class);
        $this->call(RolsTableSeeder::class);
        $this->call(UsersTableSeeder::class);
        $this->call(EstadocanchasTableSeeder::class);
        $this->call(DeportesTableSeeder::class);

        $this->call(TurnosTableSeeder::class);
        $this->call(HorasTableSeeder::class);
        $this->call(DetallediasTableSeeder::class);
        $this->call(DiasTableSeeder::class);
        $this->call(EstadoreservaTableSeeder::class);
    }
}
