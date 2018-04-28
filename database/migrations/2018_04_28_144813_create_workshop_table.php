<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateWorkshopTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('workshop', function (Blueprint $table) {
            $table->increments('id_workshop');
            $table->integer('id_pemateri')->unsigned();
            $table->string('materi',100);
            $table->string('token',6);
            $table->timestamp('created_at');
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
        Schema::dropIfExists('workshop');
    }
}
