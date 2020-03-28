<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateGuildwarKillsTable extends Migration
{
	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('guildwar_kills', function(Blueprint $table)
		{
			$table->integer('id', true);
			$table->string('killer', 50);
			$table->string('target', 50);
			$table->integer('killerguild')->default(0);
			$table->integer('targetguild')->default(0);
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
		Schema::drop('guildwar_kills');
	}
}
