<?php

namespace Database\Factories;
use App\Models\Ingreso;
use App\Models\Camion;// se coloca el modelo de la tabla que esta enlazada junto con ingreso en este caso camion ya que ingreso depende de ella
use App\Models\Bodega;// se agrega el modelo de bodega por que ingreso depende de ella.
use Illuminate\Database\Eloquent\Factories\Factory;

class IngresoFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
     protected $ingreso=Ingreso::class;
    public function definition()
    {
        return [
            'id_camion' => Camion::inRandomOrder()->first()->id, // Genera un ID de camión aleatorio entre 1 y 10
            'id_bodega_ingreso' => Bodega::inRandomOrder()->first()->id, // Genera un ID de bodega aleatorio entre 1 y 5
            'fecha_hora_ingreso' => $this->faker->dateTime(), // Genera una fecha y hora aleatoria
            'piloto' => $this->faker->name(), // Genera un nombre aleatorio para el piloto
            'origen' => $this->faker->city, // Genera un nombre aleatorio de ciudad como origen
            'carga' => $this->faker->sentence(), // Genera una frase aleatoria como carga
        ];
    }
}
