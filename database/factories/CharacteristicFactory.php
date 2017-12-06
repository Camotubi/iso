<?php

use Faker\Generator as Faker;

$factory->define(App\Characteristic::class, function (Faker $faker) {
    return [
        'name' => $faker->name,
    ];
});
