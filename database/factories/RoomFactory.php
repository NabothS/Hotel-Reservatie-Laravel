<?php

namespace Database\Factories;

use App\Models\Adress;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class RoomFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            //
            'number' => $this->faker->unique->numberBetween(1,20),
            'name' => $this->faker->firstName(),
            'price' => $this->faker->numberBetween(100,200),
        ];
    }
}
