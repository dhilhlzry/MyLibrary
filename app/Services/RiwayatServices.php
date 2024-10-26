<?php

namespace App\Services;

use Illuminate\Support\Facades\DB;

class RiwayatServices
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
                'peminjaman.id_buku',
                'peminjaman.tanggal_pinjam',
                'peminjaman.tanggal_kembali',
                'peminjaman.status',
                'buku.kode_buku',
                'buku.judul',
                'buku.penulis',
                'buku.penerbit',
                'buku.tahun_terbit',
                'buku.sinopsis',
                'anggota.kode_anggota',
                'anggota.nama_lengkap',
                'anggota.alamat',
                'anggota.jenis_kel',
                'anggota.email'
            );
    }
}
