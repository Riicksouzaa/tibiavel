<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDttResultsTable extends Migration
{
	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('dtt_results', function(Blueprint $table)
		{
			$table->integer('id', true);
			$table->integer('frags_blue');
			$table->integer('frags_red');
			$table->integer('towers_blue');
			$table->integer('towers_red');
			$table->string('data');
			$table->string('hora');
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('dtt_results');
	}
}
