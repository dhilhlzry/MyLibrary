<?php

namespace Database\Seeders;

use App\Models\anggota;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class AnggotaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $anggota = anggota::create([
            'kode_anggota' => 'AGT00001',
			'nama_lengkap' => 'Nadhif Alghifari',
            'alamat' => 'Cihampelas',
            'jenis_kel' => 'Laki-laki',
			'email' => env('DEFAULT_EMAIL', 'alghifari@gmail.com'),
			'password' => Hash::make(env('DEFAULT_PASSWORD', 12345678)),
        ]);

        $anggota = anggota::create([
            'kode_anggota' => 'AGT00002',
			'nama_lengkap' => 'Amin Abdul Aziz',
            'alamat' => 'Kota Bandung',
            'jenis_kel' => 'Laki-laki',
			'email' => env('DEFAULT_EMAIL', 'aminabdul@gmail.com'),
			'password' => Hash::make(env('DEFAULT_PASSWORD', 12345678)),
        ]);
    }
}
