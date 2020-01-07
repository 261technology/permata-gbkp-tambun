<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pa', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('id_acara');
            $table->string('tema');
            $table->string('ayat');
            $table->string('pendamping');
            $table->integer('persembahan');
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
        Schema::dropIfExists('pa');
    }
}
