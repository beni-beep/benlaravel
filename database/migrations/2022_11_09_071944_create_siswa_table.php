<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSiswaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('siswa', function (Blueprint $table) {
            $table->id();
            
            //nomor_induk_siswa .. create NIS as integer data type
            $table->integer('nomor_induk_siswa');
            //nama .. create name as varchar datab type
            $table->string('nama', 100);
            //alamat
            $table->string('alamat');
            //jenis_kelamin
            $table->string('jenis_kelamin');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('siswa');
    }
}
