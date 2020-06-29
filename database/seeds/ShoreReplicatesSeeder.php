<?php

use Illuminate\Database\Seeder;

class ShoreReplicatesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\ShoreReplicate::class, 11)->create();
    }
}
