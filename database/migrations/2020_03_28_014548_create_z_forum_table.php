<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateZForumTable extends Migration
{
	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('z_forum', function(Blueprint $table)
		{
			$table->integer('id', true);
			$table->integer('first_post')->default(0);
			$table->integer('last_post')->default(0);
			$table->integer('section')->default(0)->index('section');
			$table->integer('replies')->default(0);
			$table->integer('views')->default(0);
			$table->integer('author_aid')->default(0);
			$table->integer('author_guid')->default(0);
			$table->text('post_text', 65535);
			$table->string('post_topic');
			$table->boolean('post_smile')->default(0);
			$table->integer('post_date')->default(0);
			$table->integer('last_edit_aid')->default(0);
			$table->integer('edit_date')->default(0);
			$table->string('post_ip', 15)->default('0.0.0.0');
			$table->integer('icon_id');
			$table->string('news_icon', 50);
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('z_forum');
	}
}
