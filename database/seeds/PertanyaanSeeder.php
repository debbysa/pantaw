<?php

use Illuminate\Database\Seeder;
use \App\Pertanyaan;

class PertanyaanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i=1;$i<=10;$i++) {
        	Pertanyaan::create(['id_peserta'=>$i,'id_instruksi'=>$i,'pertanyaan'=>"Pertanyaan ".$i]);
        }
    }
}
