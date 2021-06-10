<?php

namespace Database\Seeders;

use App\Models\Curso;
use App\Models\Postulante;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(UserSeeder::class);
        Curso::factory(10)->create();
        $this->call(PostulanteSeeder::class);
    }
}
