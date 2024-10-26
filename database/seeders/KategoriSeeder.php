<?php

namespace Database\Seeders;

use App\Models\kategori;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class KategoriSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $kategori = kategori::create([
			'kode_kate' => 'KTG00001',
            'nama_kate' => 'Karya Umum & Novel',
        ]);

        $kategori = kategori::create([
			'kode_kate' => 'KTG00002',
            'nama_kate' => 'Teknologi & Informasi',
        ]);

        $kategori = kategori::create([
			'kode_kate' => 'KTG00003',
            'nama_kate' => 'Matematika & Sains',
        ]);

        $kategori = kategori::create([
			'kode_kate' => 'KTG00004',
            'nama_kate' => 'Kesenian & Olahraga',
        ]);

        $kategori = kategori::create([
			'kode_kate' => 'KTG00004',
            'nama_kate' => 'Kesenian & Olahraga',
        ]);

        $kategori = kategori::create([
			'kode_kate' => 'KTG00005',
            'nama_kate' => 'Sejarah & Biografi',
        ]);

        $kategori = kategori::create([
			'kode_kate' => 'KTG00006',
            'nama_kate' => 'Buku Pembelajaran',
        ]);

        $kategori = kategori::create([
			'kode_kate' => 'KTG00007',
            'nama_kate' => 'Komik & Fiksi Ilmiah',
        ]);
    }
}
