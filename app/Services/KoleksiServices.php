<?php

namespace App\Services;

use Illuminate\Support\Facades\DB;

class KoleksiServices
{
    public function index()
    {
        return DB::table('koleksi')
        ->join('anggota', 'koleksi.id_user', '=', 'anggota.id')
        ->join('buku', 'koleksi.id_buku', '=', 'buku.id')
        ->select(
            'koleksi.id AS id_koleksi',
            'koleksi.id_buku AS id_buku',
            'koleksi.id_user AS id_user',
            'anggota.nama_lengkap AS nama_lengkap',
            'buku.judul AS judul',
            'buku.penulis AS penulis',
            'buku.penerbit AS penerbit',
            'buku.tahun_terbit AS tahun_terbit',
            'buku.foto AS foto',
            'buku.sinopsis AS sinopsis'
        );
    }
}
