<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use Faker\Generator as Faker;

$factory->define(App\Todo::class, function (Faker $faker) {
    return [
        'title' => $faker->text(25),
        'completed' => $faker->boolean($chanceOfGettingTrue = 50)
    ];
});
