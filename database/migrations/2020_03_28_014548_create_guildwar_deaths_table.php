<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateGuildwarDeathsTable extends Migration
{
	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('guildwar_deaths', function(Blueprint $table)
		{
			$table->integer('id', true);
			$table->integer('player_id')->index('player_id');
			$table->integer('kills');
			$table->integer('deaths');
			$table->integer('warid')->default(0)->index('warid');
			$table->bigInteger('time');
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('guildwar_deaths');
	}
}
