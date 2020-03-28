<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTicketsReplyTable extends Migration
{
	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('tickets_reply', function(Blueprint $table)
		{
			$table->integer('ticket_replyid', true);
			$table->integer('ticket_id')->index('ticket_id_idx');
			$table->string('reply_author')->nullable();
			$table->text('reply_message', 65535)->nullable();
			$table->dateTime('reply_date')->nullable();
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('tickets_reply');
	}
}
