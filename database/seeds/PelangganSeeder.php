<?php

use Illuminate\Database\Seeder;

class PelangganSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \DB::table('pelanggans')->delete();
        
        \DB::table('pelanggans')->insert(array (
            array (
            	'user_id' => 1
            ),
            array (
            	'user_id' => 4
            )
        ));
    }
}
