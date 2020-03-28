<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateZShopDonatesTable extends Migration
{
	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('z_shop_donates', function(Blueprint $table)
		{
			$table->integer('id', true);
			$table->integer('date');
			$table->string('reference', 50);
			$table->string('account_name', 50);
			$table->string('method', 50);
			$table->string('price', 20);
			$table->integer('points');
			$table->integer('coins');
			$table->string('status', 20)->default('');
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('z_shop_donates');
	}
}
