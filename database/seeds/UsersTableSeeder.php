<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	DB::table('users') ->delete();

    	$users  = array(
    		array(

    			'name' => 'Alex',
    			'password' => Hash::make('alex'),
    			'email' => 'mymail@yandex.ru'				
    			)
    		);



    	DB::table('users') ->insert($users);
    }
}





