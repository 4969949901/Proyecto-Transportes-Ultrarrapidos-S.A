<?php

namespace Database\Seeders;

use App\Models\Predio;
use Illuminate\Database\Seeder;

class PredioSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Predio::factory(15)->create();
        /*$predios=new Predio();

        $predios->pais ='Juan Velasquez';
        $predios->ciudad ='Colonia la Repegua';
        $predios->direccion ='45678765';
        $predios->save();*/

        //
    }
}
