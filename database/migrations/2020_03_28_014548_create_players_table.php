<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePlayersTable extends Migration
{
	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('players', function(Blueprint $table)
		{
			$table->integer('id', true);
			$table->string('name')->unique('name');
			$table->integer('group_id')->default(1);
			$table->integer('account_id')->default(0)->index('account_id');
			$table->integer('level')->default(1);
			$table->integer('vocation')->default(0)->index('vocation');
			$table->integer('health')->default(150);
			$table->integer('healthmax')->default(150);
			$table->bigInteger('experience')->default(0);
			$table->integer('lookbody')->default(0);
			$table->integer('lookfeet')->default(0);
			$table->integer('lookhead')->default(0);
			$table->integer('looklegs')->default(0);
			$table->integer('looktype')->unsigned()->default(136);
			$table->integer('lookaddons')->default(0);
			$table->integer('maglevel')->default(0);
			$table->integer('mana')->default(0);
			$table->integer('manamax')->default(0);
			$table->integer('manaspent')->unsigned()->default(0);
			$table->integer('soul')->unsigned()->default(0);
			$table->integer('town_id')->unsigned()->default(0);
			$table->integer('posx')->default(0);
			$table->integer('posy')->default(0);
			$table->integer('posz')->default(0);
			$table->binary('conditions', 65535);
			$table->integer('cap')->default(0);
			$table->integer('sex')->default(0);
			$table->bigInteger('lastlogin')->unsigned()->default(0);
			$table->integer('lastip')->unsigned()->default(0);
			$table->boolean('save')->default(1);
			$table->boolean('skull')->default(0);
			$table->integer('skulltime')->default(0);
			$table->bigInteger('lastlogout')->unsigned()->default(0);
			$table->boolean('blessings')->default(0);
			$table->boolean('blessings1')->default(0);
			$table->boolean('blessings2')->default(0);
			$table->boolean('blessings3')->default(0);
			$table->boolean('blessings4')->default(0);
			$table->boolean('blessings5')->default(0);
			$table->boolean('blessings6')->default(0);
			$table->boolean('blessings7')->default(0);
			$table->boolean('blessings8')->default(0);
			$table->integer('onlinetime')->default(0);
			$table->bigInteger('deletion')->default(0);
			$table->bigInteger('balance')->unsigned()->default(0);
			$table->bigInteger('bonusrerollcount')->nullable()->default(0);
			$table->boolean('quick_loot_fallback')->nullable()->default(0);
			$table->smallInteger('offlinetraining_time')->unsigned()->default(43200);
			$table->integer('offlinetraining_skill')->default(-1);
			$table->smallInteger('stamina')->unsigned()->default(2520);
			$table->integer('skill_fist')->unsigned()->default(10);
			$table->bigInteger('skill_fist_tries')->unsigned()->default(0);
			$table->integer('skill_club')->unsigned()->default(10);
			$table->bigInteger('skill_club_tries')->unsigned()->default(0);
			$table->integer('skill_sword')->unsigned()->default(10);
			$table->bigInteger('skill_sword_tries')->unsigned()->default(0);
			$table->integer('skill_axe')->unsigned()->default(10);
			$table->bigInteger('skill_axe_tries')->unsigned()->default(0);
			$table->integer('skill_dist')->unsigned()->default(10);
			$table->bigInteger('skill_dist_tries')->unsigned()->default(0);
			$table->integer('skill_shielding')->unsigned()->default(10);
			$table->bigInteger('skill_shielding_tries')->unsigned()->default(0);
			$table->integer('skill_fishing')->unsigned()->default(10);
			$table->bigInteger('skill_fishing_tries')->unsigned()->default(0);
			$table->boolean('deleted')->default(0);
			$table->string('description')->default('');
			$table->text('comment', 65535);
			$table->integer('create_ip')->unsigned()->default(0);
			$table->integer('create_date')->unsigned()->default(0);
			$table->integer('hide_char')->default(0);
			$table->boolean('cast')->default(0);
			$table->integer('skill_critical_hit_chance')->unsigned()->default(0);
			$table->bigInteger('skill_critical_hit_chance_tries')->unsigned()->default(0);
			$table->integer('skill_critical_hit_damage')->unsigned()->default(0);
			$table->bigInteger('skill_critical_hit_damage_tries')->unsigned()->default(0);
			$table->integer('skill_life_leech_chance')->unsigned()->default(0);
			$table->bigInteger('skill_life_leech_chance_tries')->unsigned()->default(0);
			$table->integer('skill_life_leech_amount')->unsigned()->default(0);
			$table->bigInteger('skill_life_leech_amount_tries')->unsigned()->default(0);
			$table->integer('skill_mana_leech_chance')->unsigned()->default(0);
			$table->bigInteger('skill_mana_leech_chance_tries')->unsigned()->default(0);
			$table->integer('skill_mana_leech_amount')->unsigned()->default(0);
			$table->bigInteger('skill_mana_leech_amount_tries')->unsigned()->default(0);
			$table->bigInteger('skill_criticalhit_chance')->unsigned()->default(0);
			$table->bigInteger('skill_criticalhit_damage')->unsigned()->default(0);
			$table->bigInteger('skill_lifeleech_chance')->unsigned()->default(0);
			$table->bigInteger('skill_lifeleech_amount')->unsigned()->default(0);
			$table->bigInteger('skill_manaleech_chance')->unsigned()->default(0);
			$table->bigInteger('skill_manaleech_amount')->unsigned()->default(0);
			$table->smallInteger('xpboost_stamina')->nullable();
			$table->boolean('xpboost_value')->nullable();
			$table->bigInteger('marriage_status')->unsigned()->default(0);
			$table->integer('hide_skills')->nullable();
			$table->integer('hide_set')->nullable();
			$table->string('former')->default('-');
			$table->string('signature');
			$table->integer('marriage_spouse')->default(-1);
			$table->boolean('loyalty_ranking')->default(0);
			$table->boolean('madphp_signature')->default(1)->comment('Absolute Mango © MadPHP.org');
			$table->string('madphp_signature_bg', 50)->comment('Absolute Mango © MadPHP.org');
			$table->boolean('madphp_signature_eqs')->default(0)->comment('Absolute Mango © MadPHP.org');
			$table->boolean('madphp_signature_bars')->default(1)->comment('Absolute Mango © MadPHP.org');
			$table->integer('madphp_signature_cache')->comment('Absolute Mango © MadPHP.org');
			$table->integer('lookmount')->default(0);
			$table->integer('sbw_points')->default(0);
			$table->integer('InstantRewardTokens')->nullable();
			$table->bigInteger('bonus_rerolls')->default(0);
			$table->integer('onlinepoint')->nullable()->default(0);
			$table->integer('onlinepointtrie')->nullable()->default(0);
			$table->boolean('hide_char_items')->default(0);
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('players');
	}
}
