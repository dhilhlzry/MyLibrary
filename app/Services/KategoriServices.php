<?php

namespace App\Services;

use Illuminate\Support\Facades\DB;

class KategoriServices
{
    public function index()
    {
        return DB::table('relasi_kategori')
        ->join('kategori', 'relasi_kategori.id_kategori', '=', 'kategori.id')
        ->join('buku', 'relasi_kategori.id_buku', '=', 'buku.id')
        ->select(
            'relasi_kategori.id AS id_relasi',
            'relasi_kategori.id_kategori AS id_kategori',
            'kategori.kode_kate AS kode_kate',
            'kategori.nama_kate AS nama_kate',
            'relasi_kategori.id_buku AS id_buku',
            'buku.kode_buku AS kode_buku',
            'buku.judul AS judul',
            'buku.tahun_terbit AS tahun_terbit'
        );
    }
}
