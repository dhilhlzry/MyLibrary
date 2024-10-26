<?php

namespace Database\Seeders;

use App\Models\relasi_kategori;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class RelasiKategoriSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $relasi = relasi_kategori::create([
			'id_buku' => '1',
            'id_kategori' => '6',
        ]);

        $relasi = relasi_kategori::create([
			'id_buku' => '2',
            'id_kategori' => '3',
        ]);

        $relasi = relasi_kategori::create([
			'id_buku' => '2',
            'id_kategori' => '6',
        ]);

        $relasi = relasi_kategori::create([
			'id_buku' => '3',
            'id_kategori' => '4',
        ]);

        $relasi = relasi_kategori::create([
			'id_buku' => '3',
            'id_kategori' => '6',
        ]);

        $relasi = relasi_kategori::create([
			'id_buku' => '4',
            'id_kategori' => '1',
        ]);

        $relasi = relasi_kategori::create([
			'id_buku' => '5',
            'id_kategori' => '5',
        ]);

        $relasi = relasi_kategori::create([
			'id_buku' => '6',
            'id_kategori' => '2',
        ]);

        $relasi = relasi_kategori::create([
			'id_buku' => '7',
            'id_kategori' => '2',
        ]);

        $relasi = relasi_kategori::create([
			'id_buku' => '8',
            'id_kategori' => '7',
        ]);

        $relasi = relasi_kategori::create([
			'id_buku' => '9',
            'id_kategori' => '1',
        ]);

        $relasi = relasi_kategori::create([
			'id_buku' => '9',
            'id_kategori' => '3',
        ]);

        $relasi = relasi_kategori::create([
			'id_buku' => '9',
            'id_kategori' => '5',
        ]);

        $relasi = relasi_kategori::create([
			'id_buku' => '10',
            'id_kategori' => '7',
        ]);

        $relasi = relasi_kategori::create([
			'id_buku' => '11',
            'id_kategori' => '1',
        ]);
    }
}
