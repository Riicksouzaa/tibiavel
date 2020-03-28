<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTicketsTable extends Migration
{
	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('tickets', function(Blueprint $table)
		{
			$table->integer('ticket_id', true);
			$table->string('ticket_subject', 45)->default('');
			$table->string('ticket_author')->default('');
			$table->integer('ticket_author_acc_id')->index('tickets_ibfk_1_idx');
			$table->string('ticket_last_reply', 45)->default('');
			$table->integer('ticket_admin_reply');
			$table->dateTime('ticket_date');
			$table->string('ticket_ended', 45)->default('');
			$table->string('ticket_status', 45)->default('');
			$table->string('ticket_category', 45)->default('');
			$table->text('ticket_description', 65535);
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('tickets');
	}
}
