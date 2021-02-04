<?php

namespace Database\Seeders;

use DB;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	 DB::table('users')->insert(
        [
         'name' => 'BirgulAyaz',
         'email' => 'birgulayaz@gmail.com',
         'password' => '12345',
        ],
        [
         'name' => 'AhmetAyaz',
         'email' => 'ahmetayaz@gmail.com',
         'password' => '1q2w3e',
        ]

        );       
           
    }
}
