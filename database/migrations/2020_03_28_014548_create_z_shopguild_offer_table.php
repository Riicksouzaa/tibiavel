<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateZShopguildOfferTable extends Migration
{
	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('z_shopguild_offer', function(Blueprint $table)
		{
			$table->integer('id');
			$table->integer('points')->default(0);
			$table->integer('itemid1')->default(0);
			$table->integer('count1')->default(0);
			$table->integer('itemid2')->default(0);
			$table->integer('count2')->default(0);
			$table->string('offer_type')->nullable();
			$table->text('offer_description', 65535);
			$table->string('offer_name');
			$table->integer('pid')->default(0);
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('z_shopguild_offer');
	}
}
