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
        Schema::create('presensis', function (Blueprint $table) {
            $table->id('id_presensi');
            $table->string('id_karyawan');
            $table->string('nama');
            $table->date('tanggal');
            $table->time('jam_msk');
            $table->time('jam_klr');
            $table->double('latitude', 12,5);
            $table->double('longitude', 12,5);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('presensis');
    }
};
