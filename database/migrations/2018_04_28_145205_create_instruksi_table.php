<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateInstruksiTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('instruksi', function (Blueprint $table) {
            $table->increments('id_instruksi');
            $table->integer('id_workshop')->unsigned();
            $table->integer('id_pemateri')->unsigned();
            $table->string('judul',500);
            $table->integer('urutan');
            $table->foreign('id_workshop')->references('id_workshop')->on('workshop')->onUpdate('cascade')->onDelete('cascade');
            $table->foreign('id_pemateri')->references('id_pemateri')->on('pemateri')->onUpdate('cascade')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('instruksi');
    }
}
