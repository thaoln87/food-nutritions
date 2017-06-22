<?php
/**
 * Created by PhpStorm.
 * User: lnthao
 * Date: 3/22/2017
 * Time: 4:34 PM
 */
static $password;
$factory(App\User::class, [
        'name' => $faker->name,
        'email' => $faker->unique()->safeEmail,
        'password' => $password ?: $password = bcrypt('secret'),
        'remember_token' => str_random(10),
        'birthday' => $faker->date('Y-m-d', '2005-12-31'),
        'address' => $faker->address,
        'phone_number' => $faker->phoneNumber,
        'height' => $faker->numberBetween(140, 250),
        'weight' => $faker->numberBetween(40, 120),
        'expected_weight' => $faker->numberBetween(45, 80),
        'is_activated' => $faker->boolean(80)
]);
