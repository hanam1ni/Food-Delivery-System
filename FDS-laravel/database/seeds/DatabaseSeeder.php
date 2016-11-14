<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	DB::table('customer')->delete();
	    DB::table('customer')->insert(array(
	    	'user_id' => '000001',
	        'username'     => 'myUser',
	        'password' => Hash::make('secret'),
	        'email'    => 'userEmail@email.com',
	        'address' => 'Address No1',
	        'address2' => 'Address No2',
	    ));
    }
}
