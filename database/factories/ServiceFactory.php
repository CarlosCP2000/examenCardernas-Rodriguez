<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Service;
use Faker\Generator as Faker;

$factory->define(Service::class, function (Faker $faker) {
    return [
        'qualification' => 5,
        'commentary' => $faker -> sentence,
        'month' => $faker -> month
    ];
});
