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
        Schema::create('notulensi_rapats', function (Blueprint $table) {
            $table->id();
            $table->string('Nomor_Surat')->unique();
            $table->string('Tanggal_Rapat');
            $table->string('Ruang_Rapat');
            $table->string('Perihal');
            $table->string('Tipe_Rapat');
            $table->string('Validasi');
            $table->string('Notulensi')->nullable();
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
        Schema::dropIfExists('notulensi_rapats');
    }
};