<?php

namespace Database\Factories;
use App\Models\Egreso;
use App\Models\Camion;
use App\Models\Bodega;
use Illuminate\Database\Eloquent\Factories\Factory;

class EgresoFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'id_camion' => Camion::inRandomOrder()->first()->id, // Genera un ID de camión aleatorio entre 1 y 10
            'id_bodega_egreso' => Bodega::inRandomOrder()->first()->id, // Genera un ID de bodega aleatorio entre 1 y 5
            'fecha_hora_egreso' => $this->faker->dateTime(), // Genera una fecha y hora aleatoria
            'destino' => $this->faker->city, // Genera un nombre aleatorio de ciudad como origen
            'carga' => $this->faker->sentence(), // Genera una frase aleatoria como carga
        ];
    }
}
