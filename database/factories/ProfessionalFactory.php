<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Professional;
use Faker\Generator as Faker;

$factory->define(Professional::class, function (Faker $faker) {
    return [
        'name' => $faker -> name,
        'lastname' => $faker -> lastname,
        'type' => $faker -> jobTitle,
        'qualification' => 5
    ];
});
