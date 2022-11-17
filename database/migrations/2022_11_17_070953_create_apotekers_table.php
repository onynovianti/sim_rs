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
        Schema::create('apotekers', function (Blueprint $table) {
            $table->id();
            $table->string('namaLengkap');
            $table->string('username')->unique();
            $table->string('password');
            $table->string('alamat');
            $table->string('noHp');
            $table->integer('jenisKelamin');
            $table->string('tempatLahir');
            $table->date('tanggalLahir');
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
        Schema::dropIfExists('apotekers');
    }
};
