<?php

use App\ShoreExposure;
use Illuminate\Database\Seeder;

class ShoreExposuresSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $items = [
            ['id' => 1, 'code' => 'C', 'name' => 'Cold'],
            ['id' => 2, 'code' => 'H', 'name' => 'Hot'],
        ];

        foreach ($items as $item) {
            ShoreExposure::updateOrCreate(['id' => $item['id']], $item);
        }
    }
}
