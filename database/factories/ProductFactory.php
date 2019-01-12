<?php

use Faker\Generator as Faker;

$factory->define(App\Product::class, function (Faker $faker) {
    return [
        'name' => $faker->name,
        'description' => $faker->sentence(),
        'count' => $faker->numberBetween(1, 100),
        'price' => $faker->numberBetween(100, 5000),
        'user_id' => (new \App\User)->select('id')->get()->random()->id
    ];
});
