<?php namespace Tests\Http\Controllers\FoodController;

use App\Brand;
use App\Food;
use Illuminate\Foundation\Testing\DatabaseTransactions;

/**
 * Created by PhpStorm.
 * User: lnthao
 * Date: 3/22/17
 * Time: 5:51 PM
 */
class FoodControllerTest extends \Tests\TestCase
{
    use DatabaseTransactions;

    /**
     * @test
     */
    public function store_Food_Information_Save_In_Database()
    {
        $response = $this->post('food', FoodDataBuilder::createFoodData());

        $response->assertStatus(200);
        $this->assertEquals(1, Food::whereName('Test Food')->get()->count());
    }

    /**
     * @test
     */
    public function store_Food_With_New_Brand_Save_Brand_And_Food_In_Database()
    {
        $response = $this->post('food', FoodDataBuilder::createFoodData(['brand' => 'New Brand']));

        $response->assertStatus(200);
        $food = Food::whereName('Test Food')->get()->first();
        $brand = Brand::whereName('New Brand')->get()->first();
        $this->assertEquals($brand->id, $food->brand_id);
    }

    /**
     * @test
     */
    public function store_Food_With_Existing_Brand_Save_Food_With_Brand()
    {
        $brand = new Brand();
        $brand->name = 'New Brand';
        $brand->save();

        $response = $this->post('food', FoodDataBuilder::createFoodData(['brand' => $brand->name]));

        $response->assertStatus(200);
        $food = Food::whereName('Test Food')->get()->first();
        $this->assertNotNull($food);
        $this->assertEquals($brand->id, $food->brand_id);
    }
}