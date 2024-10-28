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
        Schema::create('relasi_kategori', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_buku')->required();
            $table->unsignedBigInteger('id_kategori')->required();
            $table->timestamps();

            $table->foreign('id_buku')
                ->references('id')
                ->on('buku')
                ->onDelete('cascade'); // Cascade on delete

            $table->foreign('id_kategori')
                ->references('id')
                ->on('kategori')
                ->onDelete('cascade'); // Cascade on delete
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('relasi_kategori');
    }
};
