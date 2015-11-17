<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRecipeMealTimeTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		//
        Schema::create('recipe_mealtime', function($table)
        {
            $table->integer('recipe_id');
            $table->integer('meal_id');
            $table->timestamp('updated_at');
            $table->timestamp('created_at');
        });
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		//
        Schema::dropIfExists('recipe_mealtime');
	}

}
