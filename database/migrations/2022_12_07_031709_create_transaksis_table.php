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
        Schema::create('transaksis', function (Blueprint $table) {
            $table->id();
            // $table->unsignedBigInteger('karyawan_id');
            $table->unsignedBigInteger('dokter_id');
            $table->unsignedBigInteger('pasien_id');
            $table->unsignedBigInteger('obat_id');
            $table->integer('status')->default(0);
            $table->timestamps();
        });

        Schema::table('transaksis', function (Blueprint $table) {
            // $table->foreign('karyawan_id')->references('id')->on('karyawans');
            $table->foreign('pasien_id')->references('id')->on('pasiens');
            $table->foreign('dokter_id')->references('id')->on('dokters');
            $table->foreign('obat_id')->references('id')->on('obats');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('transaksis');
    }
};
