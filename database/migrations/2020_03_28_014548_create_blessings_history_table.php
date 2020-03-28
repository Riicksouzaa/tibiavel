<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBlessingsHistoryTable extends Migration
{
	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('blessings_history', function(Blueprint $table)
		{
			$table->integer('id');
			$table->integer('player_id');
			$table->boolean('blessing');
			$table->boolean('loss');
			$table->integer('timestamp');
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('blessings_history');
	}
}
