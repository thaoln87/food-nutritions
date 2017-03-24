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
        'serving_per_container' => $faker->numberBetween(1,10),
        'calories' => $faker->numberBetween(90,500),
        'total_fat' => $faker->numberBetween(1,10),
        'saturated' => $faker->numberBetween(0,1),
        'polyunsaturated' => $faker->numberBetween(0,1),
        'monounsaturated' => $faker->numberBetween(0,1),
        'trans' => $faker->numberBetween(0,1),
        'cholesterol' => $faker->numberBetween(0,10),
        'sodium' => $faker->numberBetween(0,200),
        'potassium' => $faker->numberBetween(0,10),
        'total_carbs' => $faker->numberBetween(10, 200),
        'dietary_fiber' => $faker->numberBetween(10,200),
        'sugar' => $faker->numberBetween(10,200),
        'protein' => $faker->numberBetween(2,50),
        'vitamin_a' => $faker->numberBetween(0,20),
        'vitamin_c' => $faker->numberBetween(0,20),
        'calcium' => $faker->numberBetween(0,20),
        'iron' => $faker->numberBetween(0,20),
        'guaranteed' => $faker->boolean

]);
