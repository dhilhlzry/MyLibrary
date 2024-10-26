<?php

namespace Database\Seeders;

use App\Models\buku;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class BukuSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $buku = buku::create([
			'kode_buku' => 'BKU00001',
            'judul' => 'Kamus Bahasa Inggris',
            'penulis' => 'Fadhil Halyzari',
            'penerbit' => 'SMK TIP',
            'tahun_terbit' => 2015,
            'foto' => 'post-image/oIMJKdX119DoCnz9JHTyqSYBD1LJIyF3teoezOCe.jpg',
            'sinopsis' => 'Kamus Bahasa Inggris 100 milyar',
        ]);

        $buku = buku::create([
			'kode_buku' => 'BKU00002',
            'judul' => 'Fisika & Kimia',
            'penulis' => 'Nazmi Khayri',
            'penerbit' => 'SMK TIP',
            'tahun_terbit' => 2017,
            'foto' => 'post-image/JBIwbXFqOx96SyAO3zRKPtcyLwPo0UaTBEzuO27d.jpg',
            'sinopsis' => 'Belajar Fisika & Kimia',
        ]);

        $buku = buku::create([
            'kode_buku' => 'BKU00003',
            'judul' => 'Taktik Strategi Futsal',
            'penulis' => 'Coach Justin',
            'penerbit' => 'Gramedia',
            'tahun_terbit' => 2019,
            'foto' => 'post-image/iOC6tBGAfXLPZS8nNwtv5A4tLEUsqqDQcZNMJBKw.jpg',
            'sinopsis' => 'Strategi Dalam Bermain Futsal Part 1',
        ]);

        $buku = buku::create([
            'kode_buku' => 'BKU00004',
            'judul' => 'Perahu Kertas',
            'penulis' => 'Dea Lestari',
            'penerbit' => 'Gramedia',
            'tahun_terbit' => 2019,
            'foto' => 'post-image/a4DK0N1wE291KlAdZmEKQ2MT9CtlbRcXigEtmOGK.jpg',
            'sinopsis' => 'Novel Perahu Kertas',
        ]);

        $buku = buku::create([
            'kode_buku' => 'BKU00005',
            'judul' => 'Biografi Pahlawan',
            'penulis' => 'M Aziz',
            'penerbit' => 'Gramedia',
            'tahun_terbit' => 2020,
            'foto' => 'post-image/Z5iKTQ4XEMDApeJCFSiqxhtYO5IxIlnwMKcb6CmD.jpg',
            'sinopsis' => 'Biogarfi Pahlawan Kemerdekaan',
        ]);

        $buku = buku::create([
            'kode_buku' => 'BKU00006',
            'judul' => 'Belajar Laravel',
            'penulis' => 'M Ghazi',
            'penerbit' => 'SMK TIP',
            'tahun_terbit' => 2021,
            'foto' => 'post-image/wYgRpoXKfGJSDl8cX8W62jtIRxyl3R5vZwGU1T7b.jpg',
            'sinopsis' => 'Belajar Laravel Menyenangkan',
        ]);

        $buku = buku::create([
            'kode_buku' => 'BKU00007',
            'judul' => 'Belajar React JS',
            'penulis' => 'Barikli Fajar',
            'penerbit' => 'PT Smooets',
            'tahun_terbit' => 2021,
            'foto' => 'post-image/TTmnbmnbfa8pHfPynym2rtDoXO3dQT2ui4my142w.jpg',
            'sinopsis' => 'Belajar React Js Menyenangkan',
        ]);

        $buku = buku::create([
            'kode_buku' => 'BKU00008',
            'judul' => 'Naruto The Last',
            'penulis' => 'Masashi Khisimoto',
            'penerbit' => 'Japan Media',
            'tahun_terbit' => 2016,
            'foto' => 'post-image/WClktyrkVMS1Uxtkp9cJt560pSkaYORlQInGFwbf.jpg',
            'sinopsis' => 'Naruto The Last Generation',
        ]);

        $buku = buku::create([
            'kode_buku' => 'BKU00009',
            'judul' => 'Sang Alkemis',
            'penulis' => 'Paulo Cuelho',
            'penerbit' => 'Gramedia',
            'tahun_terbit' => 2017,
            'foto' => 'post-image/kXxf8PMoV2eIa7IxmoH6UPSGmd1pd6yJpbgWBieK.jpg',
            'sinopsis' => 'Sang Alekmis Ahli Kimia',
        ]);

        $buku = buku::create([
            'kode_buku' => 'BKU00010',
            'judul' => 'Jujutsu Kaisen',
            'penulis' => 'Gege Akutami',
            'penerbit' => 'Japan Media',
            'tahun_terbit' => 2020,
            'foto' => 'post-image/qHAh8MHQW27LhLoS2tsjidZjqlqOWAUogDXjWcRn.jpg',
            'sinopsis' => 'Jujustsu Kaisen Part 1',
        ]);

        $buku = buku::create([
            'kode_buku' => 'BKU00011',
            'judul' => 'Pulang Pergi',
            'penulis' => 'Tere Liye',
            'penerbit' => 'Gramedia',
            'tahun_terbit' => 2021,
            'foto' => 'post-image/4eEu1dSTObj5d7Wmyyb00BLgY6D7TM5Ibi9BPVPj.jpg',
            'sinopsis' => 'Novel Pulang Pergi',
        ]);
    }
}
