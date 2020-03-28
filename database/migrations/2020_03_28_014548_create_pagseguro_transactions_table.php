<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePagseguroTransactionsTable extends Migration
{
	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('pagseguro_transactions', function(Blueprint $table)
		{
			$table->string('transaction_code', 36)->default('');
			$table->string('name', 200)->nullable()->index('name');
			$table->string('payment_method', 50)->default('');
			$table->string('status', 50)->default('')->index('status');
			$table->integer('item_count');
			$table->dateTime('data');
			$table->float('payment_amount', 10, 0)->nullable()->default(0);
			$table->unique(['transaction_code','status'], 'transaction_code');
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('pagseguro_transactions');
	}
}
