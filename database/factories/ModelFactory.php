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

/** @var \Illuminate\Database\Eloquent\Factory $factory */
$factory->define(App\User::class, function (Faker\Generator $faker) {
    static $password;

    return [
        'name' => $faker->name,
        'email' => $faker->unique()->safeEmail,
        'password' => $password ?: $password = bcrypt('secret'),
        'remember_token' => str_random(10),
    ];
});

/**
 * Food's factory
 */
$factory->define(App\Food::class, function(Faker\Generator $faker) {
    return [
        'name' => $faker->name,
        'description' => $faker->sentence,
        'serving' => $faker->word,
        'serving_per_container' => $faker->numberBetween(1,10)
    ];
});

$factory->state(App\Food::class, 'name_potato', function ($faker) {
    return [
        'name' => $faker->lexify('???? potato ?????'),
    ];
});

$factory->state(App\Food::class, 'description_potato', function ($faker) {
    return [
        'description' => $faker->lexify('???? potato ?????'),
    ];
});