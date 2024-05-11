<?php

namespace Database\Seeders;
use App\Models\Ingreso;
use Illuminate\Database\Seeder;

class IngresoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       Ingreso::factory(15)->create();
       /*
        $ingreso1= New Ingreso1();

        $ingreso1->id_camion
        $ingreso1->id_bodega_ingreso
        $ingreso1->fecha_hora_ingreso='';
        $ingreso1->piloto='Julio Morales';
        $ingreso1->origen='Jutiapa';
        $ingreso1->carga='Banano';

         $ingreso->save();

       Ingreso::create([
            'id_camion' -> 1,
            'id_bodega_ingreso' -> 1,
            'fecha_hora_ingreso' -> now(),
            'piloto' -> 'Juan Perez',
            'origen' -> 'Ciudad A',
            'carga' -> 'Cajas de productos',
        ]);
        */
    }
}
