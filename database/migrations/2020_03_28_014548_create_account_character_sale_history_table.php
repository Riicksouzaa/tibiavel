<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAccountCharacterSaleHistoryTable extends Migration
{
	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('account_character_sale_history', function(Blueprint $table)
		{
			$table->integer('id', true);
			$table->integer('id_old_account')->nullable()->index('id_old_acc_idx');
			$table->integer('id_player')->nullable()->index('id_player_idx');
			$table->integer('id_new_account')->nullable()->index('id_new_acc_idx');
			$table->boolean('price_type')->nullable();
			$table->integer('price')->nullable();
			$table->integer('char_id')->nullable();
			$table->timestamp('dta_insert')->default(DB::raw('CURRENT_TIMESTAMP'));
			$table->dateTime('dta_sale')->nullable();
			$table->boolean('extornada')->nullable();
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('account_character_sale_history');
	}
}
