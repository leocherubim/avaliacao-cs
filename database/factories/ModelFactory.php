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

$factory->define(Avaliacao\Entities\User::class, function (Faker\Generator $faker) {
    return [
        'name' => $faker->name,
        'email' => $faker->email,
        'password' => bcrypt(str_random(10)),
        'remember_token' => str_random(10),
    ];
});

$factory->define(Avaliacao\Entities\Artist::class, function (Faker\Generator $faker) {
    return [
        'name' => $faker->name,
        'home_country' => $faker->country,
        'biography' => $faker->text
    ];
});

$factory->define(Avaliacao\Entities\Album::class, function (Faker\Generator $faker) {
    return [
        'title' => $faker->company,
        'genre' => $faker->lastName,
        'release_date' => $faker->date,
        'price' => $faker->randomFloat($nbMaxDecimals = 2, $min = 0, $max = 99)
    ];
});

$factory->define(Avaliacao\Entities\Music::class, function (Faker\Generator $faker) {
    return [
        'title' => $faker->company,
        'duration' => $faker->randomDigit,
        'composer' => $faker->name,
        'letter' => $faker->text
    ];
});