<?php
/**
 * Created by PhpStorm.
 * User: lnthao
 * Date: 3/22/2017
 * Time: 2:11 PM
 */

namespace tests\integration;

use App\Food;

use PHPUnit\Framework\Assert;
use Illuminate\Foundation\Testing\DatabaseTransactions;
use Tests\TestCase;
use Laracasts\TestDummy\Factory as TestDummy;

class FoodTest extends TestCase
{
    // Clean up all data created in testing
    use DatabaseTransactions;

    const NUMBER_OF_KEYWORD_IN_NAME = 5;
    const NUMBER_OF_KEYWORD_IN_DESCRIPTION = 2;
    const NUMBER_OF_OTHERS = 10;
    const KEYWORD = 'potato';

    /**
     * @test
     */
    public function search_name_or_description_returns_true()
    {
        // Arrange
        TestDummy::times($this::NUMBER_OF_KEYWORD_IN_NAME)->create(Food::class, ['name' => '???? '. $this::KEYWORD .' ?????']);
        TestDummy::times($this::NUMBER_OF_KEYWORD_IN_DESCRIPTION)->create(Food::class, ['description' => '???? '. $this::KEYWORD .' ?????']);
        TestDummy::times($this::NUMBER_OF_OTHERS)->create(Food::class);

        // Act
        $foods = Food::search($this::KEYWORD);

        // Assert
        Assert::assertEquals($this::NUMBER_OF_KEYWORD_IN_NAME + $this::NUMBER_OF_KEYWORD_IN_DESCRIPTION
            , $foods->count());
    }

    /**
     * @test
     */
    public function search_name_only_returns_true()
    {
        // Arrange
        TestDummy::times($this::NUMBER_OF_KEYWORD_IN_NAME)->create(Food::class, ['name' => '???? '. $this::KEYWORD .' ?????']);
        TestDummy::times($this::NUMBER_OF_OTHERS)->create(Food::class);

        // Act
        $foods = Food::search($this::KEYWORD);

        // Assert
        Assert::assertEquals($this::NUMBER_OF_KEYWORD_IN_NAME, $foods->count());
    }

    /**
     * @test
     */
    public function search_description_only_returns_true()
    {
        // Arrange
        TestDummy::times($this::NUMBER_OF_KEYWORD_IN_DESCRIPTION)->create(Food::class, ['description' => '???? '. $this::KEYWORD .' ?????']);
        TestDummy::times($this::NUMBER_OF_OTHERS)->create(Food::class);

        // Act
        $foods = Food::search($this::KEYWORD);

        // Assert
        Assert::assertEquals($this::NUMBER_OF_KEYWORD_IN_DESCRIPTION, $foods->count());
    }

    /**
     * @test
     */
    public function search_name_not_existed_returns_zero()
    {
        // Arrange
        TestDummy::times($this::NUMBER_OF_OTHERS)->create(Food::class);

        // Act
        $foods = Food::search($this::KEYWORD);

        // Assert
        Assert::assertEquals(0, $foods->count());
    }
}