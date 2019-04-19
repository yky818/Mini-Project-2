<?php

use Faker\Generator as Faker;

$factory->define(App\Cars::class, function (Faker $faker) {
    return [
        'make'  => $faker->randomElement([ 'ford', 'honda', 'toyota' ]),
        'model' => $faker->word(),
        'year'  => $faker->year(),
    ];
});