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
            App\User::create([
        	'name' => 'John Smith',
        	'email' => 'john_smith@gmail.com',
        	'password' => Hash::make('password'),
        	'remember_token' => str_random(10),
        ]);
    }
}
