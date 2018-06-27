<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class UasPwsPuspa extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('mahasiswa', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nim_mhs',10);
            $table->string('nm_mhs',60);
            $table->date('tgl_lahir');
            $table->string('email_mhs',60);
            $table->string('telp_mhs',13);
            $table->string('alamat_mhs',150);
            $table->string('jenkel_mhs',10);
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('mahasiswa', function(Blueprint $table){
        });
    }
}
