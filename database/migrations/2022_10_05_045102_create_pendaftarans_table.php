<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pendaftarans', function (Blueprint $table) {
            $table->id();
            $table->string('nama');
            $table->string('daerah-pemilihan')->nullable();
            $table->string('nik');
            $table->string('no-telepon')->nullable();
            $table->string('tempat-lahir');
            $table->dateTime('tanggal-lahir');
            $table->string('jenis-kelamin');
            $table->string('agama');
            $table->text('alamat-ktp');
            $table->text('alamat-domisili');
            $table->string('status-perkawinan');
            $table->string('pendidikan-terakhir');
            $table->string('pekerjaan');
            $table->string('sd');
            $table->string('smp');
            $table->string('sma');
            $table->string('s1')->nullable();
            $table->string('s2')->nullable();
            $table->string('s3')->nullable();
            $table->text('riwayat-diklat')->nullable();
            $table->text('riwayat-organisasi')->nullable();
            $table->text('riwayat-pekerjaan')->nullable();
            $table->text('riwayat-penghargaan')->nullable();
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
        Schema::dropIfExists('pendaftarans');
    }
};
