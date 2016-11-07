<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateRestaurantTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('restaurant', function(Blueprint $table)
		{
			$table->string('restaurant_id', 6)->primary();
			$table->text('restaurant_name', 65535);
			$table->integer('restaurant_phone')->nullable();
			$table->text('restaurant_address', 65535);
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('restaurant');
	}

}
