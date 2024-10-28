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
        Schema::create('ulasan', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_user')->required();
            $table->unsignedBigInteger('id_buku')->required();
            $table->string('ulasan', 50)->required();
            $table->string('rating', 50)->required();
            $table->date('tanggal');
            $table->timestamps();

            $table->foreign('id_buku')
                ->references('id')
                ->on('buku')
                ->onDelete('cascade'); // Cascade on delete

            $table->foreign('id_user')
                ->references('id')
                ->on('anggota')
                ->onDelete('cascade'); // Cascade on delete
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('ulasan');
    }
};
