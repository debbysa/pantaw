<?php

use Illuminate\Database\Seeder;
use \App\Peserta;

class PesertaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i=1;$i<=10;$i++) {
        	Peserta::create(['id_status'=>1,'nama'=>'Nama '.$i,'username'=>'Username '.$i,'password'=>'Pasword'.$i,'email'=>'email'.$i.'@gmail.com']);
        }
    }
}
