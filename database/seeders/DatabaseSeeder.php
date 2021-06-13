<?php

namespace Database\Seeders;

use App\Models\Age;
use App\Models\Curso;
use App\Models\Postulante;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Storage;
use App\Models\Statu;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        Storage::deleteDirectory('public/postulantes');
        Storage::makeDirectory('public/postulantes');
        $this->call(UserSeeder::class);
        Curso::factory(10)->create();
        Statu::factory(4)->create();
        Age::factory(4)->create();
        $this->call(PostulanteSeeder::class);
    }
}
