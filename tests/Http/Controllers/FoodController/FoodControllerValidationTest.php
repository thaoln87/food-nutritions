<?php namespace Tests\Http\Controllers\FoodController;

/**
 * Created by PhpStorm.
 * User: lnthao
 * Date: 3/23/17
 * Time: 2:35 PM
 */
class FoodControllerValidationTest extends \Tests\TestCase
{
    /**
     * @test
     * @dataProvider getInvalidFoodData
     */
    public function store_Invalid_Input_Redirect_To_Previous_Page($foodData, $testName)
    {
        $response = $this->post('food', $foodData);


        $this->assertEquals(302, $response->baseResponse->getStatusCode(), 'Fail: '.$testName);
    }

    public function getInvalidFoodData()
    {
        return array(
            array(FoodDataBuilder::createFoodData(['name' => '']), 'name is empty'),
            array(FoodDataBuilder::createFoodData(['serving_per_container' => -5]), 'serving_per_container is negative number'),
            array(FoodDataBuilder::createFoodData(['calories' => -5]), 'calories is negative number'),
            array(FoodDataBuilder::createFoodData(['total_fat' => -5]), 'total_fat is negative number'),
            array(FoodDataBuilder::createFoodData(['saturated' => -5]), 'saturated is negative number'),
            array(FoodDataBuilder::createFoodData(['polyunsaturated' => -5]), 'polyunsaturated is negative number'),
            array(FoodDataBuilder::createFoodData(['monounsaturated' => -5]), 'monounsaturated is negative number'),
            array(FoodDataBuilder::createFoodData(['trans' => -5]), 'trans is negative number'),
            array(FoodDataBuilder::createFoodData(['cholesterol' => -5]), 'cholesterol is negative number'),
            array(FoodDataBuilder::createFoodData(['sodium' => -5]), 'sodium is negative number'),
            array(FoodDataBuilder::createFoodData(['potassium' => -5]), 'potassium is negative number'),
            array(FoodDataBuilder::createFoodData(['total_carbs' => -5]), 'total_carbs is negative number'),
            array(FoodDataBuilder::createFoodData(['cholesterol' => -5]), 'cholesterol is negative number'),
            array(FoodDataBuilder::createFoodData(['dietary_fiber' => -5]), 'dietary_fiber is negative number'),
            array(FoodDataBuilder::createFoodData(['sugar' => -5]), 'sugar is negative number'),
            array(FoodDataBuilder::createFoodData(['protein' => -5]), 'protein is negative number'),
            array(FoodDataBuilder::createFoodData(['vitamin_a' => -5]), 'vitamin_a is negative number'),
            array(FoodDataBuilder::createFoodData(['vitamin_c' => -5]), 'vitamin_c is negative number'),
            array(FoodDataBuilder::createFoodData(['calcium' => -5]), 'calcium is negative number'),
            array(FoodDataBuilder::createFoodData(['iron' => -5]), 'iron is negative number'),
            array(FoodDataBuilder::createFoodData(['serving' => 'a']), 'Serving does not begin with a number'),
            array(FoodDataBuilder::createFoodData(['serving' => '10']), 'Serving does not end with a text'),
            array(FoodDataBuilder::createFoodData(['serving' => '10.5 cup']), 'Serving does not use decimal'),
        );
    }
}