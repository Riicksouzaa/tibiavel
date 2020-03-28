<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateGuildMembershipTable extends Migration
{
	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('guild_membership', function(Blueprint $table)
		{
			$table->integer('player_id')->primary();
			$table->integer('guild_id')->index('guild_id');
			$table->integer('rank_id')->index('rank_id');
			$table->string('nick', 15)->default('');
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('guild_membership');
	}
}
