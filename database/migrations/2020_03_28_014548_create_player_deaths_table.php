<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePlayerDeathsTable extends Migration
{
	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('player_deaths', function(Blueprint $table)
		{
			$table->integer('player_id')->index('player_id');
			$table->bigInteger('time')->unsigned()->default(0);
			$table->integer('level')->default(1);
			$table->string('killed_by')->index('killed_by');
			$table->boolean('is_player')->default(1);
			$table->string('mostdamage_by', 100)->index('mostdamage_by');
			$table->boolean('mostdamage_is_player')->default(0);
			$table->boolean('unjustified')->default(0);
			$table->boolean('mostdamage_unjustified')->default(0);
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('player_deaths');
	}
}
