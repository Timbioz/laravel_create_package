<?php

use Faker\Generator as Faker;

$factory->define(App\Model\Tags::class, function (Faker $faker) {
    return [
        'title' => $faker->sentence(1)
    ];
});
