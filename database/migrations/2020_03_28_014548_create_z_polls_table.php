<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateZPollsTable extends Migration
{
	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('z_polls', function(Blueprint $table)
		{
			$table->integer('id');
			$table->string('question');
			$table->integer('end');
			$table->integer('start');
			$table->integer('answers');
			$table->integer('votes_all');
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('z_polls');
	}
}
