<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Uploadpengungkit extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('uploadkomponen', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('filename');
            $table->UnsignedInteger('skpd_id');
            $table->UnsignedInteger('komponen_id');
            $table->string('nilai')->nullable();
            $table->text('keterangan')->nullable();
            $table->integer('status')->default(0);
            $table->timestamps();
            
            $table->foreign('skpd_id')->references('id')->on('skpd')->onUpdate('cascade')->onDelete('cascade');
            $table->foreign('komponen_id')->references('id')->on('komponen')->onUpdate('cascade')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('uploadkomponen');
    }
}
