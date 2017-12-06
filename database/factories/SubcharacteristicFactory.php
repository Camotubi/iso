<?php

use Faker\Generator as Faker;

$factory->define(App\Subcharacteristic::class, function (Faker $faker) {
    return [
        'name' => $faker->name,
    ];
});
