<?php
/**
 * Created by PhpStorm.
 * User: lnthao
 * Date: 3/22/17
 * Time: 4:24 PM
 */

namespace tests\integration;


use App\Brand;
use Illuminate\Foundation\Testing\DatabaseTransactions;
use Tests\TestCase;

class BrandTest extends TestCase
{
    use DatabaseTransactions;

    /**
     * @test
     */
    public function getOrCreate_An_existing_brand_Return_it()
    {
        $brand = new Brand();
        $brand->name = "BrandName";
        $brand->save();

        $gotBrand = Brand::getOrCreate($brand->name);

        $this->assertEquals($brand->id, $gotBrand->id);
    }

    /**
     * @test
     */
    public function getOrCreate_A_new_brand_Create_it()
    {
        // Arrange
        $brandName = 'This is a non-existing brand name';

        $this->assertEquals(0, Brand::whereName($brandName)->get()->count());

        // Act
        Brand::getOrCreate($brandName);

        $this->assertNotNull(Brand::whereName($brandName));
    }
}