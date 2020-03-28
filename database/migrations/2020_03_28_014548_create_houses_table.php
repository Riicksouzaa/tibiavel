<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHousesTable extends Migration
{
	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('houses', function(Blueprint $table)
		{
			$table->integer('id', true);
			$table->integer('owner')->index('owner');
			$table->integer('paid')->unsigned()->default(0);
			$table->integer('warnings')->default(0);
			$table->string('name');
			$table->integer('rent')->default(0);
			$table->integer('town_id')->default(0)->index('town_id');
			$table->integer('bid')->default(0);
			$table->integer('bid_end')->default(0);
			$table->integer('last_bid')->default(0);
			$table->integer('highest_bidder')->default(0);
			$table->integer('size')->default(0);
			$table->integer('beds')->default(0);
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('houses');
	}
}
