<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeysToPlayerPreydataTable extends Migration
{
	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('player_preydata', function(Blueprint $table)
		{
			$table->foreign('player_id', 'player_preydata_ibfk_1')->references('id')->on('players')->onUpdate('CASCADE')->onDelete('CASCADE');
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('player_preydata', function(Blueprint $table)
		{
			$table->dropForeign('player_preydata_ibfk_1');
		});
	}
}
