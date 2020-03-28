<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAtrWikiCategoryTable extends Migration
{
	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('atr_wiki_category', function(Blueprint $table)
		{
			$table->integer('id_atr_wiki_category', true);
			$table->string('nome');
			$table->string('descricao');
			$table->text('text', 65535);
			$table->timestamp('dta_insert')->default(DB::raw('CURRENT_TIMESTAMP'));
			$table->timestamp('dta_update')->default(DB::raw('CURRENT_TIMESTAMP'));
			$table->dateTime('dta_deleted')->nullable();
			$table->boolean('is_active')->default(1);
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('atr_wiki_category');
	}
}
