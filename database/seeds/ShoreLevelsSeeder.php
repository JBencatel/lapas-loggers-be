<?php

use App\ShoreLevel;
use Illuminate\Database\Seeder;

class ShoreLevelsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $items = [
            ['id' => 1, 'code' => 'L', 'name' => 'Low'],
            ['id' => 2, 'code' => 'M', 'name' => 'Medium'],
            ['id' => 3, 'code' => 'S', 'name' => 'Supra'],
            ['id' => 4, 'code' => 'H', 'name' => 'High']
        ];

        foreach ($items as $item) {
            ShoreLevel::updateOrCreate(['id' => $item['id']], $item);
        }
    }
}
