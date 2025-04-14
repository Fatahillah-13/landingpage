<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('employees', function (Blueprint $table) {
            $table->id();
            $table->string('nik_karyawan');
            $table->string('nama_lengkap');
            $table->string('nik_ktp');
            $table->string('no_hp');
            $table->string('no_hp_keluarga');
            $table->string('status_keluarga');
            $table->string('nama_ibu');
            $table->string('gol_darah');
            $table->string('npwp')->nullable();
            $table->string('email');

            $table->text('alamat_ktp');
            $table->string('provinsi');
            $table->string('kota');
            $table->string('kecamatan');
            $table->string('kelurahan');
            $table->string('rt');
            $table->string('rw');

            $table->string('tinggal_di');
            $table->text('alamat_domisili');

            $table->string('status_pernikahan');
            $table->string('nama_pasangan')->nullable();

            $table->integer('jumlah_anak')->nullable();
            $table->string('nama_anak')->nullable();
            $table->date('tanggal_lahir_anak')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('employees');
    }
};
