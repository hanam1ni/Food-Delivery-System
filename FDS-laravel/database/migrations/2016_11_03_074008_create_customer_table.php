<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateCustomerTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('customer', function(Blueprint $table)
		{
			$table->string('user_id', 6)->index('user_id');
			$table->string('username', 32)->primary();
			$table->string('password', 64);
			$table->string('email', 254);
			$table->text('address', 65535);
			$table->text('address2', 65535)->nullable();
			$table->text('address3', 65535)->nullable();
			$table->string('phone', 16)->nullable();
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('customer');
	}

}
