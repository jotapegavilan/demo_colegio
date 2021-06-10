<?php

namespace Database\Factories;

use App\Models\Curso;
use Illuminate\Database\Eloquent\Factories\Factory;

class CursoFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Curso::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'number' => $this->faker->numberBetween(1,8),
            'letter' => $this->faker->randomLetter,
            'accepted' => $this->faker->numberBetween(0,25),
            'total_capacity' => $this->faker->numberBetween(25,30)
        ];
    }
}
