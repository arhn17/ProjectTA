<?php

use Illuminate\Database\Seeder;

class TherapistsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \DB::table('therapists')->delete();
        
        \DB::table('therapists')->insert(array (
            array (
            	'nama' => 'Lucy'
            ),
            array (
            	'nama' => 'Hendri'
            )
        ));
    }
}
