<?php

namespace Database\Factories;
use App\Models\Transportista;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class TransportistaFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */


    protected $model1 = Transportista::class;
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
