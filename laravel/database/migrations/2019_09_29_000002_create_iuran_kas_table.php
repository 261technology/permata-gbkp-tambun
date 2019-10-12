<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateIuranKasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('iuran_kas', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('id_anggota');
            $table->string('nama_anggota')->nullable();
            $table->date('tanggal_pembayaran');
            $table->integer('nominal');
            $table->integer('tahun');
            $table->string('keterangan')->nullable();
            $table->integer('deleted')->nullable()->default(0);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('iuran_kas');
        Schema::dropIfExists('total_iuran_kas');
        Schema::dropIfExists('pengeluaran');
        Schema::dropIfExists('kantin');
        Schema::dropIfExists('aktivitas_kantin');
    }
}
