<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateGlobalMiscTable extends Migration
{
	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('global_misc', function(Blueprint $table)
		{
			$table->integer('key');
			$table->boolean('world_id')->default(0);
			$table->binary('info', 65535);
			$table->unique(['key','world_id'], 'key');
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('global_misc');
	}
}
