<?php

use Illuminate\Database\Seeder;
use \App\Status;

class StatusSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i=1;$i<=3;$i++) {
        	Status::create(['nama'=>'Nama '.$i,'keterangan'=>'Keterangan '.$i]);
        }
    }
}
