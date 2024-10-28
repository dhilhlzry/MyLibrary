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
            $table->unsignedBigInteger('id_user')->required();
            $table->unsignedBigInteger('id_buku')->required();
            $table->string('kode_buku', 50)->required();
            $table->string('judul', 50)->required();
            $table->string('penulis', 50)->required();
            $table->string('penerbit', 50)->required();
            $table->string('tahun_terbit', 50)->required();
            $table->timestamps();

            $table->foreign('id_buku')
                ->references('id')
                ->on('buku')
                ->onDelete('cascade'); // Cascade on delete

            $table->foreign('id_user')
                ->references('id')
                ->on('users')
                ->onDelete('cascade'); // Cascade on delete
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
