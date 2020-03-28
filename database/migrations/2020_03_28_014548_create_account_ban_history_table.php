<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAccountBanHistoryTable extends Migration
{
	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('account_ban_history', function(Blueprint $table)
		{
			$table->increments('id');
			$table->integer('account_id')->index('account_id_4');
			$table->string('reason');
			$table->bigInteger('banned_at');
			$table->bigInteger('expired_at');
			$table->integer('banned_by')->index('banned_by');
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('account_ban_history');
	}
}
