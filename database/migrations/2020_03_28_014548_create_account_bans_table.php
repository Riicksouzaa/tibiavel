<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAccountBansTable extends Migration
{
	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('account_bans', function(Blueprint $table)
		{
			$table->integer('account_id')->primary();
			$table->string('reason');
			$table->bigInteger('banned_at');
			$table->bigInteger('expires_at');
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
		Schema::drop('account_bans');
	}
}
