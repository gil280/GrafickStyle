<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Termo;
use App\Models\Taza;
use App\Models\Sudadera;
use App\Models\Pulsera;
use App\Models\Playera;
use App\Models\Extras;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
         User::factory(10)->create();
        /*User::factory()->create([
            'name' => 'Test User',
            'email' => 'test@example.com',
        ]); */

        Termo::factory(50)->create();
        Taza::factory(50)->create();
        Sudadera::factory(50)->create();
        Pulsera::factory(50)->create();
        Playera::factory(50)->create();
        Extras::factory(50)->create();
}
 }