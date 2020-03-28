<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMarketOffersTable extends Migration
{
	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('market_offers', function(Blueprint $table)
		{
			$table->increments('id');
			$table->integer('player_id')->index('player_id');
			$table->boolean('sale')->default(0);
			$table->integer('itemtype')->unsigned();
			$table->smallInteger('amount')->unsigned();
			$table->bigInteger('created')->unsigned()->index('created');
			$table->boolean('anonymous')->default(0);
			$table->integer('price')->unsigned()->default(0);
			$table->index(['sale','itemtype'], 'sale');
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('market_offers');
	}
}
