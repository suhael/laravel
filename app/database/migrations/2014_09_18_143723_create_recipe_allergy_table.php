<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRecipeAllergyTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		//
        Schema::create('recipe_allergy', function($table)
        {
            $table->integer('recipe_id');
            $table->integer('allergy_id');
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
        Schema::dropIfExists('recipe_allergy');
	}

}
