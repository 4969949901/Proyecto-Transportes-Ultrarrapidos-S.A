<?php

namespace Database\Seeders;
use APP\Models\Transportista;
use Illuminate\Database\Seeder;

class TransportistaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    //Seedere para llenado de pruebas en la BD.
    public function run()
    {
        // Transportista::factory(15)->create();
        $transportista=new Transportista();

        $transportista->nombre ='Juan Velasquez';
        $transportista->direccion ='Colonia la Repegua';
        $transportista->telefono ='45678765';
        $transportista->correo_electronico ='JV@gmail.com';

        $transportista->save();

        //dato dos.Ejemplo
        $transportista2=new Transportista2();

        $transportista2->nombre ='Marcelo de la Fuente';
        $transportista2->direccion ='Colonia El Manantial';
        $transportista2->telefono ='44568765';
        $transportista2->correo_electronico ='Marcelo@gmail.com';

        $transportista2->save();
    }
}
