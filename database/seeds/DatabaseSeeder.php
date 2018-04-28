<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->call(StatusSeeder::class);
        $this->call(PemateriSeeder::class);
        $this->call(PesertaSeeder::class);
        $this->call(WorkshopSeeder::class);
        $this->call(InstruksiSeeder::class);
        $this->call(TugasSeeder::class);
        $this->call(PertanyaanSeeder::class);
        $this->call(DetailPesertaSeeder::class);
    }
}
