<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePenggunasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('penggunas', function (Blueprint $table) {
            $table->increments('id_pengguna');
            $table->string('email')->unique();
            $table->string('password');
            $table->string('nama_pengguna');
            $table->string('alamat_pengguna');
            $table->string('no_tlp_pengguna');
            $table->string('tgl_lhr_pengguna');
            $table->integer('jenis_kel_pengguna');
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
        Schema::dropIfExists('penggunas');
    }
}
