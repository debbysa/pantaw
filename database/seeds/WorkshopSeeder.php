<?php

use Illuminate\Database\Seeder;
use \App\Workshop;

class WorkshopSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i=1;$i<=10;$i++) {
        	Workshop::create(['id_pemateri'=>$i,'materi'=>'Materi '.$i,'token'=>str_random(6),'created_at'=>date('Y-m-d h:i:s')]);
        }
    }
}
