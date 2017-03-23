<?php
/**
 * Created by PhpStorm.
 * User: lnthao
 * Date: 3/22/2017
 * Time: 4:34 PM
 */

$factory(App\Food::class, [
        'name' => $faker->name,
        'description' => $faker->sentence,
        'serving' => $faker->word,
        'serving_per_container' => $faker->numberBetween(1,10)
]);
