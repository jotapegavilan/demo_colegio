<?php

namespace Database\Factories;

use App\Models\Age;
use Illuminate\Database\Eloquent\Factories\Factory;

class AgeFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Age::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => $this->faker->unique()->numberBetween(2021,2026)
        ];
    }
}
