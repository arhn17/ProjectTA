<?php

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
        \DB::table('users')->delete();
        
        \DB::table('users')->insert(array (
            array (
            	'name' => 'Non Member',
            	'email' => 'nonmember@gmail.com',
            	'password' => bcrypt('nonmember'),
            	'role' => 3
            ),
            array (
            	'name' => 'Admin',
            	'email' => 'admin@gmail.com',
            	'password' => bcrypt('admin'),
            	'role' => 1
            ),
            array (
            	'name' => 'Cashier',
            	'email' => 'cashier@gmail.com',
            	'password' => bcrypt('admin'),
            	'role' => 2
            ),
            array (
            	'name' => 'Saidah',
            	'email' => 'saidah@gmail.com',
            	'password' => bcrypt('admin'),
            	'role' => 3
            ),
        ));
    }
}
