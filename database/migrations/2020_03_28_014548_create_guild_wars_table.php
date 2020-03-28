<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateGuildWarsTable extends Migration
{
	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('guild_wars', function(Blueprint $table)
		{
			$table->integer('id', true);
			$table->integer('guild1')->default(0)->index('guild1');
			$table->integer('guild2')->default(0)->index('guild2');
			$table->string('name1');
			$table->string('name2');
			$table->boolean('status')->default(0);
			$table->bigInteger('started')->default(0);
			$table->bigInteger('ended')->default(0);
			$table->bigInteger('toend')->default(0);
			$table->bigInteger('buyin')->default(0);
			$table->integer('fraglimit')->default(0);
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('guild_wars');
	}
}
