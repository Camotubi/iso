<?php

use Faker\Generator as Faker;

$factory->define(App\QualityAttribute::class, function (Faker $faker) {
    return [
        'name' => $faker->name,
    ];
});
