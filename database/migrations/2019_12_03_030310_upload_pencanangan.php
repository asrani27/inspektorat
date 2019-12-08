<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class UploadPencanangan extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('upload', function (Blueprint $table) {
            $table->Increments('id');
            $table->text('judul');
            $table->UnsignedInteger('skpd_id')->nullable();
            $table->UnsignedInteger('kategori_id')->nullable();
            $table->timestamps();
            $table->foreign('skpd_id')->references('id')->on('skpd')->onUpdate('cascade')->onDelete('cascade');
            $table->foreign('kategori_id')->references('id')->on('kategori')->onUpdate('cascade')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('upload');
    }
}
