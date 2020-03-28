<?php

use Illuminate\Database\Seeder;

class AccountsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('accounts')->delete();
        
        \DB::table('accounts')->insert(array (
            0 => 
            array (
                'id' => 1,
                'name' => 'tibiavel_acc',
                'password' => sha1('example_password'),
                'secret' => '',
                'type' => 1,
                'premdays' => 0,
                'coins' => 0,
                'lastday' => 0,
                'email' => '',
                'creation' => 0,
                'vote' => 0,
                'key' => '0',
                'email_new' => '',
                'email_new_time' => 0,
                'rlname' => '',
                'location' => '',
                'page_access' => 0,
                'email_code' => '',
                'next_email' => 0,
                'premium_points' => 0,
                'secret_status' => 0,
                'create_date' => 0,
                'create_ip' => 0,
                'last_post' => 0,
                'flag' => 'unknown',
                'vip_time' => 0,
                'guild_points' => 0,
                'guild_points_stats' => 0,
                'passed' => 0,
                'block' => 0,
                'refresh' => 0,
                'birth_date' => '',
                'gender' => '',
                'loyalty_points' => 0,
                'authToken' => '',
                'player_sell_bank' => 0,
                'tournamentBalance' => 0,
                'tokens' => NULL,
            )
        ));
        
        
    }
}