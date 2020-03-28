<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateZShopOfferTable extends Migration
{
	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('z_shop_offer', function(Blueprint $table)
		{
			$table->integer('id', true);
			$table->integer('category');
			$table->integer('points')->default(0);
			$table->integer('coins')->default(0);
			$table->string('price', 50)->default('');
			$table->integer('itemid')->default(0);
			$table->string('mount_id', 100)->default('');
			$table->string('addon_name', 100)->default('');
			$table->integer('count')->default(0);
			$table->string('offer_type')->nullable();
			$table->text('offer_description', 65535);
			$table->string('offer_name')->default('');
			$table->integer('offer_date');
			$table->string('default_image', 50)->default('');
			$table->integer('hide')->default(0);
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('z_shop_offer');
	}
}
