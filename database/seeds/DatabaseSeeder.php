<?php

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
        $this->call(CountriesSeeder::class);
        $this->call(ShoreLevelsSeeder::class);
        $this->call(ShoreExposuresSeeder::class);
        $this->call(ShoreReplicatesSeeder::class);
        $this->call(ShoreSubreplicateSeeder::class);
    }
}
