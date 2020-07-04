<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\ShoreSubreplicate;
use Faker\Generator as Faker;

$factory->define(ShoreSubreplicate::class, function (Faker $faker) {
    static $label = "A";
    return [
        'label' => $label++
    ];
});
