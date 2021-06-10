<?php

namespace Database\Factories;

use App\Models\Curso;
use App\Models\Postulante;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

class PostulanteFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Postulante::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'names' => $this->faker->firstName(),
            'surnames' => $this->faker->lastName,
            'status' => $this->faker->numberBetween(0,2),
            'date_of_birth' => $this->faker->date(),
            'user_id' => User::all()->random()->id,
            'curso_id' => Curso::all()->random()->id

        ];
    }
}
