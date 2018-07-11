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
        $this->call(UserSeeder::class);
        $this->call(PelangganSeeder::class);
        $this->call(RuanganSeeder::class);
        $this->call(ServiceSeeder::class);
        $this->call(TherapistsSeeder::class);
        $this->call(PermissionSeeder::class);
    }
}
