<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateKantinTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
       Schema::create('kantin', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->date('tanggal');
            $table->integer('pemasukan');
            $table->string('tujuan')->nullable();
            $table->string('keterangan')->nullable();
            $table->integer('deleted')->default(0);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('kantin');
    }
}
