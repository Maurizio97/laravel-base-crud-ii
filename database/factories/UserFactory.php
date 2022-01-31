<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\User;
use Faker\Generator as Faker;

$factory->define(User::class, function (Faker $faker) {
    return [
            'name' => $faker -> firstName(),
            'lastname' => $faker -> lastName(),
            'username' => $faker -> userName(),
            'email' => $faker -> freeEmail(),
            'password' => $faker -> password(5, 30),
    ];
});
