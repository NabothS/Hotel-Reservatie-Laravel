<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class AdressFactory extends Factory
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
            'street'=>$this->faker->streetName(),
            'zip'=>$this->faker->numberBetween(1,1000),
            'city'=>$this->faker->city(),
            'province'=>$this->faker->word(),
            'country_code'=>$this->faker->countryCode,
        ];
    }
}
