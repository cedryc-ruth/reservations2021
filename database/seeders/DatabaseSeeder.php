<?php

namespace Database\Seeders;

use App\Models\Artist;
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
        $this->call([
            ArtistSeeder::class,
            TypeSeeder::class,
        ]);
        // \App\Models\User::factory(10)->create();
    }
}
