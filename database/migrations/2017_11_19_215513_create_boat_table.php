<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateBoatTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('boat', function(Blueprint $table)
		{
			$table->integer('id', true);
			$table->string('name');
			$table->enum('type', array('sail','motor'));
			$table->decimal('length', 4);
			$table->text('work_description', 65535);
			$table->string('photo')->nullable();
			$table->dateTime('arrival_date');
			$table->dateTime('delivery_date');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('boat');
	}

}
