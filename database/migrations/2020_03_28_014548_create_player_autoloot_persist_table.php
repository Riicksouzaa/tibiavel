<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePlayerAutolootPersistTable extends Migration
{
	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('player_autoloot_persist', function(Blueprint $table)
		{
			$table->integer('player_guid')->nullable();
			$table->integer('cont_id')->nullable();
			$table->integer('item_id')->nullable();
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('player_autoloot_persist');
	}
}
