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
        Schema::create('buku', function (Blueprint $table) {
            $table->id('id');
            $table->string('kode_buku',20)->required();
            $table->string('judul',50)->required();
            $table->string('penulis',20)->required();
            $table->string('penerbit',20)->required();
            $table->integer('tahun_terbit');
            $table->string('foto',200)->required();
            $table->string('sinopsis',50)->required();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('buku');
    }
};
