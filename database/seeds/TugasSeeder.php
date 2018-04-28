<?php

use Illuminate\Database\Seeder;
use \App\Tugas;

class TugasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i=1;$i<=10;$i++) {
        	Tugas::create(['id_instruksi'=>$i,'keterangan'=>'Keterangan '.$i,'referensi'=>'ReferensiSourceCode'.$i]);
        }
    }
}
