<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAccountViplistTable extends Migration
{
	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('account_viplist', function(Blueprint $table)
		{
			$table->integer('account_id')->index('account_id')->comment('id of account whose viplist entry it is');
			$table->integer('player_id')->index('player_id')->comment('id of target player of viplist entry');
			$table->string('description', 128)->default('');
			$table->boolean('icon')->default(0);
			$table->boolean('notify')->default(0);
			$table->unique(['account_id','player_id'], 'account_player_index');
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('account_viplist');
	}
}
