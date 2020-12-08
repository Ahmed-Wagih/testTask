<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Specialize;
use Faker\Generator as Faker;

$factory->define(Specialize::class, function (Faker $faker) {
    return [
        'name' => $faker->name
    ];
});
