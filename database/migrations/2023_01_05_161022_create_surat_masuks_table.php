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
        Schema::create('surat_masuks', function (Blueprint $table) {
            $table->id();
            $table->string('Nomor_Surat')->unique();
            $table->string('Tanggal_Surat');
            $table->string('Tanggal_Diterima');
            $table->string('Pengirim');
            $table->string('Perihal');
            $table->string('Disposisi');
            $table->string('Lampiran');
            $table->string('Isi_Disposisi')->nullable();
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
        Schema::dropIfExists('surat_masuks');
    }
};