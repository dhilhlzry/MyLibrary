<?php

namespace App\Http\Controllers;

use App\Models\peminjaman;
use Carbon\Carbon;
use Illuminate\Http\Request;
use App\Services\RiwayatServices;

class laporanController extends Controller
{
    /**
     * Display a listing of the resource.
     */

    protected $riwayat_services;

    public function __construct(RiwayatServices $riwayat_services)
    {
        $this->riwayat_services = $riwayat_services;
    }

    public function index()
    {
        $tampil_riwayat = $this->riwayat_services->index();
        if (request('search_laporan')) {
            $data['laporan'] = $tampil_riwayat->where('kode_pinjam', 'like', '%' . request('search_laporan') . '%')->get();
        } else {
            $data['laporan'] = $tampil_riwayat->get();
        }
        $data['title'] = "Laporan";
        return view('admin.laporan.laporan', $data);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function detail(string $id)
    {
        $data['detail'] = $this->riwayat_services->index()->where('peminjaman.id', $id)->first();
        $data['title'] = "Home";
        return view('admin.laporan.detail_laporan', $data);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $tampil_riwayat = $this->riwayat_services->index();
        $dari_tanggal = Carbon::parse($request->daritanggal)->locale('id')->isoFormat('D MMMM Y');
        $sampai_tanggal = Carbon::parse($request->sampaitanggal)->locale('id')->isoFormat('D MMMM Y');
        if ($request->status == 'pinjam') {
            $data['laporan'] = $tampil_riwayat->whereBetween('tanggal_pinjam', [$dari_tanggal, $sampai_tanggal])->where('status', 'pinjam')->get();
        } else if ($request->status == 'selesai') {
            $data['laporan'] = $tampil_riwayat->whereBetween('tanggal_pinjam', [$dari_tanggal, $sampai_tanggal])->where('status', 'selesai')->get();
        } else {
            $data['laporan'] = $tampil_riwayat->whereBetween('tanggal_pinjam', [$dari_tanggal, $sampai_tanggal])->get();
        }
        $data['dari'] = $dari_tanggal;
        $data['sampai'] = $sampai_tanggal;
        $data['title'] = "Laporan";
        return view('admin.laporan.cetak_laporan', $data);
    }

    /**
     * Display the specified resource.
     */
    public function show()
    {
        $data['laporan'] = peminjaman::all();
        $data['title'] = "Laporan";
        return view('admin.laporan.modal_laporan', $data);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function destroy()
    {
        $data['laporan'] = $this->riwayat_services->index();
        $data['title'] = "Laporan";
        return redirect('/laporan')->with('warning', 'Gagal Menghapus Data !');
    }
}
