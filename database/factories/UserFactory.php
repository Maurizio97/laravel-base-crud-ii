<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use Faker\Generator as Faker;

$factory->define(Model::class, function (Faker $faker) {
    return [
            'name' => $faker -> firstName(),
            'lastname' => $faker -> lastName(),
            'user_name' => $faker -> userName(),
            'email' => $faker -> freeEmail(),
            'password' => $faker -> password(5, 30),
    ];
});
