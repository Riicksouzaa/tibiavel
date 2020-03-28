<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePlayerKillsTable extends Migration
{
	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('player_kills', function(Blueprint $table)
		{
			$table->integer('player_id')->index('player_id');
			$table->bigInteger('time')->unsigned()->default(0);
			$table->integer('target');
			$table->boolean('unavenged')->default(0);
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('player_kills');
	}
}
