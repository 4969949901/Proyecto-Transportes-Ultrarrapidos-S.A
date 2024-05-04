<?php

namespace Database\Seeders;

use App\Models\Egreso;
use App\Models\Camion;
use App\Models\Bodega;
use Illuminate\Database\Seeder;

class EgresoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Egreso::factory(15)->create();

    }
}
