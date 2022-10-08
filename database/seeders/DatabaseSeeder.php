<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
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
      \App\Models\User::factory(10)->create();
      \App\Models\Cliente::factory(10)->create();
      \App\Models\Tecnico::factory(10)->create();
      \App\Models\Descuento::factory(10)->create();
      \App\Models\Servicio::factory(10)->create();
    }
}
