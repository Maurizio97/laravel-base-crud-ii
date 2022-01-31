<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Film;
use Faker\Generator as Faker;

$factory->define(Film::class, function (Faker $faker) {
    return [
        'title' => $faker -> words(3, true),
        'subtitle' => $faker -> words(1, true),
        'release_date' => $faker -> date(),
    ];
});
