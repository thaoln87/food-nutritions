<?php
namespace Tests\Http\Controllers\FoodController;

/**
 * Created by PhpStorm.
 * User: lnthao
 * Date: 3/23/17
 * Time: 3:10 PM
 */
class FoodDataBuilder
{
    /**
     * create food sample data
     * @param array $values Specific data
     * @return array
     */
    public static function createFoodData(array $values = null)
    {
        $defaultValue = [
            'name' => 'Test Food',
            'description' => 'Test food description',
            'serving' => '3/4 cup',
            'serving_per_container' => 5,
            'calories' => 10,
            'total_fat' => 12,
            'saturated' => 12,
            'polyunsaturated' => 14,
            'monounsaturated' => 56,
            'trans' => 13,
            'cholesterol' => 12,
            'sodium' => 14,
            'potassium' => 10,
            'total_carbs' => 10,
            'dietary_fiber' => 10,
            'sugar' => 10,
            'protein' => 10,
            'vitamin_a' => 10,
            'vitamin_c' => 10,
            'calcium' => 10,
            'iron' => 10,
            'published' => 1
        ];

        if($values == null)
        {
            return $defaultValue;
        }
        else {
            return array_merge($defaultValue, $values);
        }
    }

}