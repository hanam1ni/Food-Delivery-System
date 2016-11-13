<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateFoodMenuTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('food_menu', function(Blueprint $table)
		{
			$table->string('food_id', 6)->primary();
			$table->string('restaurant_id', 6)->index('restaurant_id');
			$table->text('food_name', 65535);
			$table->boolean('meal');
			$table->boolean('vegan');
			$table->boolean('islamic');
			$table->boolean('dessert');
			$table->boolean('drink');
			$table->integer('price');
			$table->integer('price_extra')->nullable();
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('food_menu');
	}

}
