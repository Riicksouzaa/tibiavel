<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSellcharTable extends Migration
{
	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('sellchar', function(Blueprint $table)
		{
			$table->integer('id', true);
			$table->string('name', 40);
			$table->integer('vocation');
			$table->integer('price');
			$table->string('status', 40);
			$table->string('oldid', 40);
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('sellchar');
	}
}
