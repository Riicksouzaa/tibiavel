<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStoreHistoryTable extends Migration
{
	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('store_history', function(Blueprint $table)
		{
			$table->integer('accountid');
			$table->boolean('mode')->default(0);
			$table->integer('amount');
			$table->boolean('coinMode')->default(0);
			$table->string('description')->nullable();
			$table->integer('cust');
			$table->bigInteger('time')->nullable();
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('store_history');
	}
}
