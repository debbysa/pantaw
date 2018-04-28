<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDetailPesertaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('detail_peserta', function (Blueprint $table) {
            $table->increments('id_detail');
            $table->integer('id_workshop')->unsigned();
            $table->integer('id_peserta')->unsigned();
            $table->foreign('id_workshop')->references('id_workshop')->on('workshop')->onUpdate('cascade')->onDelete('cascade');
            $table->foreign('id_peserta')->references('id_peserta')->on('peserta')->onUpdate('cascade')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('detail_peserta');
    }
}
