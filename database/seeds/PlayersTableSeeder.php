<?php

use Illuminate\Database\Seeder;

class PlayersTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('players')->delete();
        
        \DB::table('players')->insert(array (
            0 => 
            array (
                'id' => 1,
                'name' => 'Rook Sample',
                'group_id' => 1,
                'account_id' => 1,
                'level' => 1,
                'vocation' => 0,
                'health' => 150,
                'healthmax' => 150,
                'experience' => 0,
                'lookbody' => 106,
                'lookfeet' => 95,
                'lookhead' => 78,
                'looklegs' => 116,
                'looktype' => 128,
                'lookaddons' => 0,
                'maglevel' => 0,
                'mana' => 5,
                'manamax' => 5,
                'manaspent' => 0,
                'soul' => 0,
                'town_id' => 6,
                'posx' => 32369,
                'posy' => 32241,
                'posz' => 7,
                'conditions' => '',
                'cap' => 400,
                'sex' => 0,
                'lastlogin' => 1523386590,
                'lastip' => 2429100989,
                'save' => 1,
                'skull' => 0,
                'skulltime' => 0,
                'lastlogout' => 1523386591,
                'blessings' => 0,
                'blessings1' => 1,
                'blessings2' => 1,
                'blessings3' => 1,
                'blessings4' => 1,
                'blessings5' => 1,
                'blessings6' => 1,
                'blessings7' => 1,
                'blessings8' => 1,
                'onlinetime' => 210,
                'deletion' => 0,
                'balance' => 0,
                'bonusrerollcount' => 0,
                'quick_loot_fallback' => 0,
                'offlinetraining_time' => 43200,
                'offlinetraining_skill' => -1,
                'stamina' => 2520,
                'skill_fist' => 10,
                'skill_fist_tries' => 0,
                'skill_club' => 10,
                'skill_club_tries' => 0,
                'skill_sword' => 10,
                'skill_sword_tries' => 0,
                'skill_axe' => 10,
                'skill_axe_tries' => 0,
                'skill_dist' => 10,
                'skill_dist_tries' => 0,
                'skill_shielding' => 10,
                'skill_shielding_tries' => 0,
                'skill_fishing' => 10,
                'skill_fishing_tries' => 0,
                'deleted' => 0,
                'description' => '',
                'comment' => '',
                'create_ip' => 0,
                'create_date' => 0,
                'hide_char' => 0,
                'cast' => 0,
                'skill_critical_hit_chance' => 0,
                'skill_critical_hit_chance_tries' => 0,
                'skill_critical_hit_damage' => 0,
                'skill_critical_hit_damage_tries' => 0,
                'skill_life_leech_chance' => 0,
                'skill_life_leech_chance_tries' => 0,
                'skill_life_leech_amount' => 0,
                'skill_life_leech_amount_tries' => 0,
                'skill_mana_leech_chance' => 0,
                'skill_mana_leech_chance_tries' => 0,
                'skill_mana_leech_amount' => 0,
                'skill_mana_leech_amount_tries' => 0,
                'skill_criticalhit_chance' => 0,
                'skill_criticalhit_damage' => 0,
                'skill_lifeleech_chance' => 0,
                'skill_lifeleech_amount' => 0,
                'skill_manaleech_chance' => 0,
                'skill_manaleech_amount' => 0,
                'xpboost_stamina' => 0,
                'xpboost_value' => 0,
                'marriage_status' => 0,
                'hide_skills' => NULL,
                'hide_set' => NULL,
                'former' => '-',
                'signature' => '',
                'marriage_spouse' => -1,
                'loyalty_ranking' => 0,
                'madphp_signature' => 1,
                'madphp_signature_bg' => '',
                'madphp_signature_eqs' => 0,
                'madphp_signature_bars' => 1,
                'madphp_signature_cache' => 0,
                'lookmount' => 0,
                'sbw_points' => 0,
                'InstantRewardTokens' => 0,
                'bonus_rerolls' => 0,
                'onlinepoint' => 0,
                'onlinepointtrie' => 0,
                'hide_char_items' => 0,
            )
        ));
        
        
    }
}