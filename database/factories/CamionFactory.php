<?php

namespace Database\Factories;
use App\Models\Camion;
use App\Models\Transportista;
use Illuminate\Database\Eloquent\Factories\Factory;

class CamionFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */

    protected $camion=Camion::class;
    public function definition()
    {
        return [
            'placa'=> $this->faker->unique()->numerify(),
            'marca' =>$this->faker->name,
            'modelo' =>$this->faker->paragraph,
            'capacidad'=>$this->faker->numerify(),
            'id_transportista' => Transportista::inRandomOrder()->first()->id
        ];
    }
}
