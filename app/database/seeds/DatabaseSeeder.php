<?php

class DatabaseSeeder extends Seeder {

    /**
	 * Run the database seeds.
	 *
	 * @return void
	 */
    public function run()
    {
        Eloquent::unguard();

        $this->call('UserTableSeeder');

        $this->command->info('User table seeded!');
    }

}

class UserTableSeeder extends Seeder {

    public function run()
    {
        DB::table('users')->delete();

        User::create(array(
        	'email' 			=>	$_ENV['DEFAULT_EMAIL'],
        	'full_name'			=>	$_ENV['DEFAULT_NAME'],
        	'password'			=>	Hash::make($_ENV['DEFAULT_PASSWORD']),
        	'remember_token'	=>	str_random(100),
        	'last_login'		=>	\Carbon\Carbon::now()
        	));
    }

}