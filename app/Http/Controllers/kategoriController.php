<?php

namespace App\Http\Controllers;

use App\Models\buku;
use App\Models\kategori;
use Illuminate\Http\Request;
use App\Services\KategoriServices;

class kategoriController extends Controller
{
    /**
     * Display a listing of the resource.
     */

    protected $kategori_services;

    public function __construct(KategoriServices $kategori_services)
    {
        $this->kategori_services = $kategori_services;
    }

    public function index()
    {
        if (request('search_kate')) {
            $data['kategori'] = kategori::where('nama_kate', 'like', '%' . request('search_kate') . '%')->get();
        } else {
            $data['kategori'] = kategori::all();
        }
        $data['title'] = "Kategori";
        return view('admin.kategori.kategori', $data);
    }

    /**
     * Show the form for creating a new resource.
     */

    public function tmbh_kategori()
    {
        $data['kategori'] = kategori::all();
        $data['title'] = "Kategori";
        return view('admin.kategori.tmbh_kategori', $data);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $kodeauto = kategori::selectRaw('LPAD(CONVERT(COUNT("kode_kate") + 1, char(8)) , 5,"0") as invoice')->first();
        $kategori = new kategori();
        $kategori->kode_kate = 'KTG' . $kodeauto->invoice;
        $kategori->nama_kate = $request->nama_kate;
        $kategori->save();
        return redirect('/kategori')->with('success', 'Input Data Berhasil !');
    }

    /**
     * Display the specified resource.
     */
    public function detail(string $id)
    {
        /////DETAIL KATEGORI
        /////select relasi_kategori.id AS id_relasi, relasi_kategori.id_kategori AS id_kategori, kategori.kode_kate AS kode_kate, kategori.nama_kate AS nama_kate, relasi_kategori.id_buku AS id_buku, buku.kode_buku AS kode_buku, buku.judul AS judul, buku.tahun_terbit AS tahun_terbit FROM relasi_kategori JOIN kategori ON relasi_kategori.id_kategori = kategori.id JOIN buku on relasi_kategori.id_buku = buku.id; from kategori
        $data['kategori'] = $this->kategori_services->index()->where('relasi_kategori.id_kategori', $id)->get();
        $data['nama_kategori'] = kategori::findOrFail($id);
        $data['title'] = "Kategori";
        return view('admin.kategori.detail_kategori', $data);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $data['kategori'] = kategori::findOrFail($id);
        $data['title'] = "Kategori";
        return view('admin.kategori.edit_kategori', $data);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $kategori = kategori::findOrFail($id);
        $kategori->nama_kate = $request->nama_kate;
        $kategori->save();
        return redirect('/kategori')->with('success', 'Update Data Berhasil !');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $kategori = kategori::findOrFail($id);
        $kategori->delete();
        return redirect('/kategori')->with('success', 'Delete Data Berhasil !');
    }
}
