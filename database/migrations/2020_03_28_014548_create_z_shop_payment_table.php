<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateZShopPaymentTable extends Migration
{
	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('z_shop_payment', function(Blueprint $table)
		{
			$table->integer('id', true);
			$table->string('ref', 10);
			$table->string('account_name', 50);
			$table->integer('service_id');
			$table->integer('service_category_id');
			$table->integer('payment_method_id');
			$table->string('price', 50);
			$table->integer('points')->unsigned();
			$table->integer('coins')->unsigned();
			$table->string('status', 50)->default('waiting');
			$table->integer('date');
			$table->integer('gift')->default(0);
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('z_shop_payment');
	}
}
