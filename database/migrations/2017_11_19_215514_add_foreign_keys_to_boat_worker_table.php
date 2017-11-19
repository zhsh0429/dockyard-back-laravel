<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToBoatWorkerTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('boat_worker', function(Blueprint $table)
		{
			$table->foreign('boat_id', 'boat_worker_ibfk_1')->references('id')->on('boat')->onUpdate('RESTRICT')->onDelete('RESTRICT');
			$table->foreign('worker_id', 'boat_worker_ibfk_2')->references('id')->on('worker')->onUpdate('RESTRICT')->onDelete('RESTRICT');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('boat_worker', function(Blueprint $table)
		{
			$table->dropForeign('boat_worker_ibfk_1');
			$table->dropForeign('boat_worker_ibfk_2');
		});
	}

}
