<?php

use Illuminate\Database\Seeder;
use \App\Instruksi;

class InstruksiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i=1;$i<=10;$i++) {
        	Instruksi::create(['id_workshop'=>$i,'id_pemateri'=>$i,'judul'=>"Judul ".$i,'urutan'=>$i]);
        }
    }
}
