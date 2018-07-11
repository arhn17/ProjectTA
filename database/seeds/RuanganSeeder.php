<?php

use Illuminate\Database\Seeder;

class RuanganSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \DB::table('ruangans')->delete();
        
        \DB::table('ruangans')->insert(array (
            array (
            	'nama_ruang' => 'Coba',
            	'status' => 1
            ),
            array (
            	'nama_ruang' => 'Coba',
            	'status' => 1
            )
        ));
    }
}
