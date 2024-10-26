<?php

namespace App\Services;

use Illuminate\Support\Facades\DB;

class KembaliServices
{
    public function index()
    {
        return DB::table('peminjaman')
        ->join('buku', 'peminjaman.id_buku', '=', 'buku.id')
        ->join('anggota', 'peminjaman.id_user', '=', 'anggota.id')
        ->select(
            'peminjaman.id',
            'peminjaman.kode_pinjam',
            'peminjaman.id_user',
            'anggota.nama_lengkap',
            'peminjaman.id_buku',
            'buku.kode_buku',
            'buku.judul',
            'peminjaman.tanggal_pinjam',
            'peminjaman.tanggal_kembali',
            'peminjaman.status'
        );
    }
}
