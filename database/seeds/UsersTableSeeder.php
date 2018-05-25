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
     //    $table->increments('id');
	    // $table->string('name');
	    // $table->string('email')->unique();
	    // $table->string('password');
	    // $table->string('avatar')->nullable();
	    // $table->integer('role')->default(100);
	    $users = [
	    	[
	    		'name' => 'thienth',
	    		'email' => 'thienth32@gmail.com',
	    		'password' => Hash::make('123456'),
	    		'role' => 500
	    	],
	    	[
	    		'name' => 'admin',
	    		'email' => 'admin@gmail.com',
	    		'password' => Hash::make('secret'),
	    		'role' => 500
	    	],
	    	[
	    		'name' => 'member',
	    		'email' => 'member@gmail.com',
	    		'password' => Hash::make('secret'),
	    		'role' => 100
	    	]

	    ];
	    DB::table('users')->insert($users);
    }
}
