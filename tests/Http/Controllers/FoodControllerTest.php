<?php
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
        $response = $this->post('food', $this->createFoodData());

        $response->assertStatus(200);
        $this->assertEquals(1, Food::whereName('Test Food')->get()->count());
    }

    /**
     * @test
     */
    public function store_Food_With_New_Brand_Save_Brand_And_Food_In_Database()
    {
        $response = $this->post('food', $this->createFoodData(['brand' => 'New Brand']));

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

        $response = $this->post('food', $this->createFoodData(['brand' => $brand->name]));

        $response->assertStatus(200);
        $food = Food::whereName('Test Food')->get()->first();
        $this->assertNotNull($food);
        $this->assertEquals($brand->id, $food->brand_id);
    }

    /**
     * create food sample data
     * @param array $values Specific data
     * @return array
     */
    private function createFoodData(array $values = null)
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