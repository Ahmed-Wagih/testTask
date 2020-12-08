<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Doctor;
use Faker\Generator as Faker;
use Illuminate\Support\Str;

$factory->define(Doctor::class, function (Faker $faker) {
    return [
        'name' => $faker->name,
        'bio' => Str::random(50),
        'total_rate' => rand(1, 5),
        'specialize_id' => rand(1, 50),
        'price' => rand(100, 500),
        'sessions' => rand(100, 500),
        'image' => 'doctor.png',
        'saturday_open' => '09:00:00',
        'saturday_close' => '18:00:00',
        'sunday_open' =>  '09:00:00',
        'sunday_close' => '18:00:00',
        'monday_open' =>  '09:00:00',
        'monday_close' => '18:00:00',
        'tuesday_open' =>  '09:00:00',
        'tuesday_close' => '18:00:00',
        'wednesday_open' =>  '09:00:00',
        'wednesday_close' => '18:00:00',
        'thursday_open' =>  '09:00:00',
        'thursday_close' => '18:00:00',
        'friday_open' =>  '09:00:00',
        'friday_close' => '18:00:00',
    ];
});
