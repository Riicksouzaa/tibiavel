<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAccountsTable extends Migration
{
	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('accounts', function(Blueprint $table)
		{
			$table->integer('id', true);
			$table->string('name', 32)->unique('name_3');
			$table->char('password', 40);
			$table->char('secret', 16)->nullable();
			$table->integer('type')->default(1);
			$table->integer('premdays')->default(0);
			$table->integer('coins')->default(0);
			$table->integer('lastday')->unsigned()->default(0);
			$table->string('email')->default('');
			$table->integer('creation')->default(0);
			$table->integer('vote');
			$table->string('key', 20)->default('0');
			$table->string('email_new')->default('');
			$table->integer('email_new_time')->default(0);
			$table->string('rlname')->default('');
			$table->string('location')->default('');
			$table->integer('page_access')->default(0);
			$table->string('email_code')->default('');
			$table->integer('next_email')->default(0);
			$table->integer('premium_points')->default(0);
			$table->boolean('secret_status')->default(0);
			$table->integer('create_date')->unsigned()->default(0);
			$table->bigInteger('create_ip')->default(0);
			$table->integer('last_post')->default(0);
			$table->string('flag', 80)->default('');
			$table->integer('vip_time')->default(0);
			$table->integer('guild_points')->default(0);
			$table->integer('guild_points_stats')->default(0);
			$table->integer('passed')->default(0);
			$table->integer('block')->default(0);
			$table->integer('refresh')->default(0);
			$table->string('birth_date', 50)->default('');
			$table->string('gender', 20)->default('');
			$table->bigInteger('loyalty_points')->default(0);
			$table->string('authToken', 100)->default('');
			$table->integer('player_sell_bank')->nullable();
			$table->integer('tournamentBalance')->default(0);
			$table->integer('tokens')->nullable()->default(0);
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('accounts');
	}
}
