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
			'email' => env('DEFAULT_EMAIL', 'fhalyzari@gmail.com'),
			'password' => Hash::make(env('DEFAULT_PASSWORD', 12345678)),
        ]);
    }
}
