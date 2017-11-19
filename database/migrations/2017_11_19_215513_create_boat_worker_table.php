<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateBoatWorkerTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('boat_worker', function(Blueprint $table)
		{
			$table->integer('id', true);
			$table->integer('boat_id')->index('boat_id');
			$table->integer('worker_id')->index('worker_id');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('boat_worker');
	}

}
