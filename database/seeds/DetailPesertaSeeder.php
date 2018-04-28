<?php

use Illuminate\Database\Seeder;
use \App\DetailPeserta;

class DetailPesertaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i=1;$i<=10;$i++) {
        	DetailPeserta::create(['id_peserta'=>$i,'id_workshop'=>$i]);
        }
    }
}
