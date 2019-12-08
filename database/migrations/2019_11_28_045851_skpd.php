<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Skpd extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('skpd', function (Blueprint $table) {
            $table->Increments('id');
            $table->string('nama');
            $table->unsignedInteger('users_id')->nullable();
            $table->integer('jml_pegawai')->default(0);
            $table->string('predikat')->default('tidak ada');
            $table->timestamps();                   
            $table->foreign('users_id')->references('id')->on('users')->onUpdate('cascade')->onDelete('set null');
      
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('skpd');
    }
}
