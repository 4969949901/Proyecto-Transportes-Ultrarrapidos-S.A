<?php

namespace Database\Seeders;

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
        // User::factory(10)->create();
        $this->call(TransportistaSeeder::class);//sirve para llamar la clase TransportistaSeeder y asi se pueda ejecutar en la Base de datos sin problema,

    }
}
