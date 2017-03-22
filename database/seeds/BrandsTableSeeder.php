<?php

use Illuminate\Database\Seeder;

// composer require laracasts/testdummy
use Laracasts\TestDummy\Factory as TestDummy;

class BrandsTableSeeder extends Seeder
{
    public function run()
    {
        TestDummy::times(10)->create(App\Brand::class);
    }
}
