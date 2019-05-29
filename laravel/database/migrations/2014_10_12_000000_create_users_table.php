<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->uuid('id');
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->string('nama');
            $table->string('marga')->nullable();
            $table->string('tempat_lahir')->nullable();
            $table->date('tanggal_lahir')->nullable();
            $table->string('jenis_kelamin',20)->nullable();
            $table->string('domisili')->nullable();
            $table->string('pekerjaan')->nullable();
            $table->string('jurusan_pendidikan')->nullable();
            $table->string('hobi')->nullable();
            $table->string('greja_ngawan')->nullable();
            $table->string('instagram')->nullable();
            $table->string('sektor')->nullable();
            $table->string('status')->nullable();
            $table->rememberToken();
            $table->timestamps();
            $table->boolean('exist')->default(1);

            $table->primary('id');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
    }
}
