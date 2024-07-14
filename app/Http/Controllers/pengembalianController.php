<?php

namespace App\Http\Controllers;

use App\Models\peminjaman;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class pengembalianController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data['kembali'] =  DB::table('tampil_kembali')->where('kode_pinjam', 'PNJ00000')->first();
        $data['title'] = "Pengembalian";
        return view('admin.pengembalian.pengembalian', $data);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        // SELECT peminjaman.id,peminjaman.kode_pinjam,peminjaman.id_user,anggota.nama_lengkap,peminjaman.id_buku,buku.kode_buku,buku.judul,peminjaman.tanggal_pinjam,peminjaman.tanggal_kembali,peminjaman.status FROM peminjaman INNER JOIN buku ON peminjaman.id_buku = buku.id INNER JOIN anggota ON peminjaman.id_user = anggota.id;
    }

    public function store(Request $request)
    {
        $data['kembali'] = DB::table('tampil_kembali')->where('kode_pinjam', $request->pinjam)->first();
        $data['title'] = "Pengembalian";
        return view('admin.pengembalian.pengembalian', $data);
    }

    /**
     * Display the specified resource.
     */
    public function show()
    {
        $data['kembali'] = peminjaman::all();
        $data['title'] = "Pengembalian";
        return view('admin.pengembalian.tmbh_pengembalian', $data);
    }

    public function hapus()
    {
        $data['kembali'] =  DB::table('tampil_kembali')->where('kode_pinjam', 'PNJ00000')->first();
        $data['title'] = "Pengembalian";
        return view('admin.pengembalian.pengembalian', $data);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function ajukan(Request $request, string $id)
    {
        //if status harus pinjam
        $kembali = peminjaman::findOrFail($id);
        if ($kembali->status == 'kembali') {
            return redirect('/pengembalian')->with('info', 'Status Sudah Kembali !');
        }else if ($kembali->status == 'selesai') {
            return redirect('/pengembalian')->with('info', 'Status Sudah Selesai !');
        }else{
            $kembali->status = 'kembali';
            $kembali->save();
            return redirect('/pengembalian')->with('success', 'Pengembalian Berhasil !');
        }
    }

}
