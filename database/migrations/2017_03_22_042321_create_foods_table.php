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
            $table->string('name')->unique()->index();
            $table->integer('brand_id')->nullable()->unsigned();
            $table->foreign('brand_id')->references('id')->on('brands');
            $table->text('description')->nullable();
            $table->string('image')->nullable();
            $table->string('serving');
            $table->integer('serving_per_container');
            $table->integer('calories')->default(0);
            $table->integer('total_fat')->default(0);
            $table->integer('saturated')->default(0);
            $table->integer('polyunsaturated')->default(0);
            $table->integer('monounsaturated')->default(0);
            $table->integer('trans')->default(0);
            $table->integer('cholesterol')->default(0);
            $table->integer('sodium')->default(0);
            $table->integer('potassium')->default(0);
            $table->integer('total_carbs')->default(0);
            $table->integer('dietary_fiber')->default(0);
            $table->integer('sugar')->default(0);
            $table->integer('protein')->default(0);
            $table->integer('vitamin_a')->default(0);
            $table->integer('vitamin_c')->default(0);
            $table->integer('calcium')->default(0);
            $table->integer('iron')->default(0);
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
