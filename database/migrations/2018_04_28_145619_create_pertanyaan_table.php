<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePertanyaanTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pertanyaan', function (Blueprint $table) {
            $table->increments('id_pertanyaan');
            $table->integer('id_peserta')->unsigned();
            $table->integer('id_instruksi')->unsigned();
            $table->string('pertanyaan',1000);
            $table->foreign('id_peserta')->references('id_peserta')->on('peserta')->onUpdate('cascade')->onDelete('cascade');
            $table->foreign('id_instruksi')->references('id_instruksi')->on('instruksi')->onUpdate('cascade')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pertanyaan');
    }
}
