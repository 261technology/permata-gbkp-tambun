<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTotalIuranKasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
         Schema::create('total_iuran_kas', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('id_anggota')->nullable();
            $table->integer('nominal')->nullable();
            $table->integer('tagihan')->nullable();
            $table->integer('tahun')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('total_iuran_kas');
    }
}
