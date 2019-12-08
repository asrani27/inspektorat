<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class FileUpload extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('fileupload', function (Blueprint $table) {
            $table->Increments('id');
            $table->string('filename');
            $table->UnsignedInteger('upload_id')->nullable();
            $table->string('status')->default(0)->nullable();
            $table->text('keterangan')->nullable();
            $table->timestamps();
            $table->foreign('upload_id')->references('id')->on('upload')->onUpdate('cascade')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('fileupload');
    }
}
