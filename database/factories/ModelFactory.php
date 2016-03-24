<?php

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| Here you may define all of your model factories. Model factories give
| you a convenient way to create models for testing and seeding your
| database. Just tell the factory how a default model should look.
|
*/

$factory->define(App\User::class, function (Faker\Generator $faker) {
    return [
        'name' => $faker->name,
        'email' => $faker->email,
        'password' => bcrypt(str_random(10)),
        'remember_token' => str_random(10),
    ];
});

$factory->define(App\Product::class, function (Faker\Generator $faker) {
    return [
        'code' => $faker->randomNumber($nbDigits = 5),
        'name' => "Product ",
        'description1' => $faker->text,
        'cost' => $faker->randomFloat($nbMaxDecimals = 2, $min = 0, $max = NULL) ,
        'price' => $faker->randomFloat($nbMaxDecimals = 3, $min = 0, $max = NULL),
        'other' => $faker->text,
    ];
});
