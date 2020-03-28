<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDailyRewardHistoryTable extends Migration
{
	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('daily_reward_history', function(Blueprint $table)
		{
			$table->integer('id', true);
			$table->smallInteger('daystreak')->default(0);
			$table->integer('player_id')->index('player_id');
			$table->integer('timestamp');
			$table->string('description')->nullable();
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('daily_reward_history');
	}
}
