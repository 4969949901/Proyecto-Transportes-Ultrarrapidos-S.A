<?php

/**/

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Bodega;
use App\Models\Predio;

class BodegaFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */

    protected $model1 = Bodega::class;

    public function definition()
    {
        return [
            'id_predio' => Predio::inRandomOrder()->first()->id,
            'numero' => $this->faker->randomNumber(),
        ];
    }
}
