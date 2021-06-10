<?php

namespace Database\Seeders;

use App\Models\Image;
use Illuminate\Database\Seeder;
use App\Models\Postulante;

class PostulanteSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $postulantes = Postulante::factory(100)->create();

        foreach ($postulantes as $postulante) {
            Image::factory(1)->create([
                'imageable_id' => $postulante->id,
                'imageable_type' => Postulante::class
            ]);
        }
    }
}
