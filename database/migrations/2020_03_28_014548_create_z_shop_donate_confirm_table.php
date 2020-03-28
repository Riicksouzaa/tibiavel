<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateZShopDonateConfirmTable extends Migration
{
	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('z_shop_donate_confirm', function(Blueprint $table)
		{
			$table->integer('id', true);
			$table->integer('date');
			$table->string('account_name', 50);
			$table->integer('donate_id');
			$table->text('msg', 65535);
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('z_shop_donate_confirm');
	}
}
