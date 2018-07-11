<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        app()['cache']->forget('spatie.permission.cache');

        DB::table('roles')->insert([
            'name' => 'admin',
            'guard_name' => 'web',
        ]);

        DB::table('roles')->insert([
            'name' => 'cashier',
            'guard_name' => 'web',
        ]);

        DB::table('roles')->insert([
            'name' => 'member',
            'guard_name' => 'web',
        ]);

        $user = \App\User::find(1);
        $user->assignRole('member');

        $user = \App\User::find(2);
        $user->assignRole('admin');

        $user = \App\User::find(3);
        $user->assignRole('cashier');

        $user = \App\User::find(4);
        $user->assignRole('member');
    }    
}
