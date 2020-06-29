<?php

use Illuminate\Database\Seeder;

class ShoreSubreplicateSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\ShoreSubreplicate::class, 4)->create();
    }
}
