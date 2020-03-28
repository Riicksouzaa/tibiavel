<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateZShopHistoryItemTable extends Migration
{
	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('z_shop_history_item', function(Blueprint $table)
		{
			$table->integer('id')->primary();
			$table->string('to_name')->default('0');
			$table->integer('to_account')->default(0);
			$table->string('from_nick');
			$table->integer('from_account')->default(0);
			$table->integer('price')->default(0);
			$table->string('offer_id')->default('');
			$table->string('trans_state');
			$table->integer('trans_start')->default(0);
			$table->integer('trans_real')->default(0);
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('z_shop_history_item');
	}
}
