<?php

use database\seeds\FoodsTableSeeder;
use Illuminate\Database\Seeder;

/**
 * Class DatabaseSeeder
 *
 * Run 'composer dump-autoload' if the seeder class is not found.
 */
class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->call(FoodsTableSeeder::class);
    }
}
