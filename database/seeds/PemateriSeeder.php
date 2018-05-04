<?php

use Illuminate\Database\Seeder;
use \App\Pemateri;

class PemateriSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i=1;$i<=10;$i++) {
        	Pemateri::create(['nama'=>'Nama '.$i,'username'=>'Username'.$i,'password'=>'Password'.$i,'email'=>'email'.$i.'@gmail.com']);
        }
    }
}
