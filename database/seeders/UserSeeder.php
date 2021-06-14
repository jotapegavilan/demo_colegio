<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name' => 'Juan Pablo Daniel',
            'surnames' => 'Gavilán Fuentealba',
            'phone_number' => '+56930532620',
            'email' => 'j.p.daniel.gavilan@gmail.com',
            'password' => bcrypt('12345678')
        ])->assignRole('admin');

        User::create([
            'name' => 'Juan Pablo',
            'surnames' => 'Gavilán Fuentealba',
            'phone_number' => '+56930532620',
            'email' => 'j.p.daniel.gavilan@gmail.cl',
            'password' => bcrypt('12345678')
        ]);

        User::factory(99)->create();
    }
}
