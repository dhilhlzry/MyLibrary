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
        Schema::create('keranjang', function (Blueprint $table) {
            $table->id();
            $table->string('id_user',50)->required();
            $table->string('id_buku',50)->required();
            $table->string('kode_buku',50)->required();
            $table->string('judul',50)->required();
            $table->string('penulis',50)->required();
            $table->string('penerbit',50)->required();
            $table->string('tahun_terbit',50)->required();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('keranjang');
    }
};
