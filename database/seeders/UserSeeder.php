<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $user = User::create([
			'name' => 'Fadhil Halyzari',
            'alamat' => 'Cihampelas',
            'jenis_kel' => 'Laki-laki',
            'no_telp' => '08123456789',
			'email' => env('DEFAULT_EMAIL', 'fhalyzari@gmail.com'),
			'password' => Hash::make(env('DEFAULT_PASSWORD', 12345678)),
            'level' => 'Admin',
        ]);

        $user = User::create([
			'name' => 'Aziz Gustian',
            'alamat' => 'Margaasih',
            'jenis_kel' => 'Laki-laki',
            'no_telp' => '082262198765',
			'email' => env('DEFAULT_EMAIL', 'maziz@gmail.com'),
			'password' => Hash::make(env('DEFAULT_PASSWORD', 12345678)),
            'level' => 'Petugas',
        ]);
    }
}
