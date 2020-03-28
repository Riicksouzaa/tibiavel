<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateIoeTable extends Migration
{
	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('ioe', function(Blueprint $table)
		{
			$table->integer('id', true);
			$table->string('name');
			$table->string('data');
			$table->string('hora');
			$table->integer('itemid');
			$table->integer('boss');
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('ioe');
	}
}
