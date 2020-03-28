<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMarketHistoryTable extends Migration
{
	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('market_history', function(Blueprint $table)
		{
			$table->increments('id');
			$table->integer('player_id');
			$table->boolean('sale')->default(0);
			$table->integer('itemtype')->unsigned();
			$table->smallInteger('amount')->unsigned();
			$table->integer('price')->unsigned()->default(0);
			$table->bigInteger('expires_at')->unsigned();
			$table->bigInteger('inserted')->unsigned();
			$table->boolean('state');
			$table->index(['player_id','sale'], 'player_id');
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('market_history');
	}
}
