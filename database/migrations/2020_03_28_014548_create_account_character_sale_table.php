<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAccountCharacterSaleTable extends Migration
{
	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('account_character_sale', function(Blueprint $table)
		{
			$table->integer('id', true);
			$table->integer('id_account');
			$table->integer('id_player')->unique('id_player_UNIQUE');
			$table->boolean('status')->default(0);
			$table->boolean('price_type');
			$table->integer('price_coins')->nullable();
			$table->integer('price_gold')->nullable();
			$table->dateTime('dta_insert');
			$table->dateTime('dta_valid');
			$table->dateTime('dta_sale')->nullable();
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('account_character_sale');
	}
}
