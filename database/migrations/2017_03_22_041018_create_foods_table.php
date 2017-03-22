<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFoodsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('foods', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->integer('brand_id')->unsigned();
            $table->foreign('brand_id')->references('id')->on('brands');
            $table->text('description');
            $table->string('image');
            $table->string('serving');
            $table->integer('serving_per_container');
            $table->integer('calories');
            $table->integer('total_fat');
            $table->integer('saturated');
            $table->integer('polyunsaturated');
            $table->integer('monounsaturated');
            $table->integer('trans');
            $table->integer('cholesterol');
            $table->integer('sodium');
            $table->integer('potassium');
            $table->integer('total_carbs');
            $table->integer('dietary_fiber');
            $table->integer('sugar');
            $table->integer('protein');
            $table->integer('vitamin_a');
            $table->integer('vitamin_c');
            $table->integer('calcium');
            $table->integer('iron');
            $table->boolean('guaranteed')->default(false);
            $table->boolean('published')->default(false);
            $table->boolean('enabled')->default(true);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('foods');
    }
}
