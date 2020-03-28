<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAtrWikiSubcategoryTable extends Migration
{
	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('atr_wiki_subcategory', function(Blueprint $table)
		{
			$table->integer('id_atr_wiki_subcategory', true);
			$table->integer('id_atr_wiki_category')->index('FK_ID_wiki_CATEGORY_idx');
			$table->string('name');
			$table->string('description')->nullable();
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
		Schema::drop('atr_wiki_subcategory');
	}
}
