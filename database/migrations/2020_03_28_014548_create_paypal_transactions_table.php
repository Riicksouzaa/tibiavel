<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePaypalTransactionsTable extends Migration
{
	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('paypal_transactions', function(Blueprint $table)
		{
			$table->integer('id', true);
			$table->string('payment_status', 70)->default('');
			$table->dateTime('date');
			$table->string('payer_email')->default('');
			$table->string('payer_id')->default('');
			$table->string('item_number1')->default('');
			$table->float('mc_gross', 10, 0);
			$table->string('mc_currency', 5)->default('');
			$table->string('txn_id')->default('');
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('paypal_transactions');
	}
}
