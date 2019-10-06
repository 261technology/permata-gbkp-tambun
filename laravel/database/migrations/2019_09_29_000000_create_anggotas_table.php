<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAnggotasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('anggotas', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->uuid('uuid')->nullable();
            $table->integer('role')->default(3);
            $table->string('email')->nullable()->unique();
            $table->string('password');
            $table->string('nama');
            $table->string('nama_panggilan')->nullable();
            $table->string('marga')->nullable();
            $table->string('tempat_lahir')->nullable();
            $table->date('tanggal_lahir')->nullable();
            $table->string('jenis_kelamin',20)->nullable()->default('L');
            $table->string('keluarga')->nullable();
            $table->string('telepon')->nullable();
            $table->string('alamat')->nullable();
            $table->string('domisili')->nullable();
            $table->integer('dengan_orang_tua')->default(0);
            $table->string('pekerjaan')->nullable();
            $table->string('pendidikan')->nullable();
            $table->string('jurusan')->nullable();
            $table->string('sekolah')->nullable();
            $table->string('perusahaan')->nullable();
            $table->string('hobi')->nullable();
            $table->string('tahun_ngawan')->nullable();
            $table->string('lokasi_ngawan')->nullable();
            $table->string('sektor')->nullable();
            $table->string('avatar')->nullable()->default('default.png');
            $table->string('instagram')->nullable();
            $table->string('status',20)->default('aktif');
            $table->integer('isDeleted')->default(0);
            $table->integer('isAdmin')->default(0);
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
        Schema::dropIfExists('anggotas');
    }
}
