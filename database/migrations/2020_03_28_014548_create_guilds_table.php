<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateGuildsTable extends Migration
{
	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('guilds', function(Blueprint $table)
		{
			$table->integer('id', true);
			$table->string('name')->unique('name');
			$table->integer('ownerid')->unique('ownerid');
			$table->integer('creationdata');
			$table->string('motd')->default('');
			$table->text('description', 65535);
			$table->binary('guild_logo', 16777215)->nullable();
			$table->integer('create_ip')->default(0);
			$table->bigInteger('balance')->unsigned()->default(0);
			$table->integer('last_execute_points')->default(0);
			$table->string('logo_gfx_name')->default('');
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('guilds');
	}
}
