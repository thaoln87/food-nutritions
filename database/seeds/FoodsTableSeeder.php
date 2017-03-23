<?php

use Illuminate\Database\Seeder;

// composer require laracasts/testdummy
use Laracasts\TestDummy\Factory as TestDummy;

class FoodsTableSeeder extends Seeder
{
    public function run()
    {
        TestDummy::times(50)->create(App\Food::class);
    }
}
