<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePlayerStorageTable extends Migration
{
	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('player_storage', function(Blueprint $table)
		{
			$table->integer('player_id')->default(0);
			$table->integer('key')->unsigned()->default(0);
			$table->integer('value')->default(0);
			$table->primary(['player_id','key']);
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('player_storage');
	}
}
