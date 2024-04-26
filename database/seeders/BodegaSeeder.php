<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Bodega;

class BodegaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Bodega::factory(15)->create();

        /*$bodegas=new Bodegas();
        $bodegas->id_predio ='Juan Velasquez';
        $bodegas->numero ='44568765';
        $bodegas->save();*/
    }
}
