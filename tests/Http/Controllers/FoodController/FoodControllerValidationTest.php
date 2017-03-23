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
     */
    public function store_Empty_Name_Redirect_The_Previous_Page()
    {
        $response = $this->post('food', FoodDataBuilder::createFoodData(['name' => '']));

        $response->assertStatus(302);
    }
}