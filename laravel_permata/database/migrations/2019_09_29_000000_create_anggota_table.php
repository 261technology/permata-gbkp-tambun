<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAnggotaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('anggota', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->uuid('uuid')->nullable();
            $table->integer('role')->default(2);
            $table->string('email')->nullable()->unique();
            $table->string('runggun')->nullable();
            $table->string('password');
            $table->string('nama');
            $table->string('nama_depan')->nullable();
            $table->string('nama_belakang')->nullable();
            $table->string('nama_panggilan')->nullable();
            $table->integer('marga')->nullable();
            $table->string('tempat_lahir')->nullable();
            $table->date('tanggal_lahir')->nullable();
            $table->string('jenis_kelamin',20)->nullable()->default('L');
            $table->string('telepon')->nullable();
            $table->string('alamat')->nullable();
            $table->string('domisili_provinsi')->nullable();
            $table->string('domisili_kota')->nullable();
            $table->integer('dengan_orang_tua')->default(0);
            $table->integer('pekerjaan')->nullable();
            $table->integer('pendidikan')->nullable();
            $table->string('jurusan')->nullable();
            $table->string('sekolah')->nullable();
            $table->string('perusahaan')->nullable();
            $table->string('hobi')->nullable();
            $table->integer('tahun_ngawan')->nullable()->default(date('Y'));
            $table->string('runggun_ngawan')->nullable()->default('TAMBUN');
            $table->integer('sektor')->nullable();
            $table->string('instagram')->nullable();
            $table->longtext('avatar',3000)->nullable();
            $table->string('status',20)->default('TERDAFTAR');
            $table->string('url_activation')->nullable();
            $table->string('url_reset_password')->nullable();
            $table->string('token')->nullable();
            $table->integer('isDeleted')->default(0);
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
        Schema::dropIfExists('anggota');
    }
}
