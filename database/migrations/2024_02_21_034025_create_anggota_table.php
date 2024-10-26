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
        Schema::create('anggota', function (Blueprint $table) {
            $table->id('id');
            $table->string('kode_anggota',20)->required();
            $table->string('nama_lengkap',50)->required();
            $table->string('alamat',50)->required();
            $table->string('jenis_kel',20)->required();
            $table->string('email',20)->required();
            $table->string('password',200)->required();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('anggota');
    }
};
