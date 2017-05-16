<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateKamarsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('kamars', function (Blueprint $table) {
            $table->increments('id_kamar');
            $table->string('nama_kamar');
            $table->integer('jumlah_kamar')->default(0);
            $table->integer('harga_kamar')->default(0);
            $table->integer('sewa_kamar');
            $table->integer('gender_kamar');
            $table->integer('id_pengguna');
            $table->integer('tv')->default(0);
            $table->integer('ac')->default(0);
            $table->integer('km')->default(0);
            $table->integer('wf')->default(0);
            $table->integer('mj')->default(0);
            $table->integer('kr')->default(0);
            $table->integer('kk')->default(0);
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
        Schema::dropIfExists('kamars');
    }
}
