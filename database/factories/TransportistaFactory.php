<?php

namespace Database\Factories;
use App\Models\Transportista;
use Illuminate\Database\Eloquent\Factories\Factory;


class TransportistaFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */


    protected $transportista = Transportista::class;
    public function definition()
    {
        return [
            'nombre' => $this->faker->name,
            'direccion' => $this->faker->address,
            'telefono' => $this->faker->phoneNumber,
            'correo_electronico' => $this->faker->email
        ];
    }
}
