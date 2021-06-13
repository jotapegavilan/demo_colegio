<?php

namespace Database\Factories;

use App\Models\Age;
use App\Models\Curso;
use App\Models\Postulante;
use App\Models\Statu;
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
            'surname_1' => $this->faker->lastName,     
            'surname_2' => $this->faker->lastName,          
            'date_of_birth' => $this->faker->date(),
            'user_id' => User::all()->random()->id,
            'statu_id' => Statu::all()->random()->id,
            'age_id' => Age::all()->random()->id,
            'curso_id' => Curso::all()->random()->id

        ];
    }
}
