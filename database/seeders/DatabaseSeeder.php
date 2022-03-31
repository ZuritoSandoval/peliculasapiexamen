<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Database\Seeders\actorSeeder;
use Database\Seeders\generoSeeder;
use Database\Seeders\peliculaSeeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(generoSeeder::class);
        $this->call(peliculaSeeder::class);
        $this->call(actorSeeder::class);
    }
}
