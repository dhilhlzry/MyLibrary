<?php

namespace App\Http\Controllers;

use App\Models\buku;
use App\Models\kategori;
use App\Models\relasi_kategori;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use App\Services\KategoriServices;

class bukuController extends Controller
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
        if (request('search_buku')) {
            $data['buku'] = buku::where('judul', 'like', '%' . request('search_buku') . '%')->get();
        } else {
            // $data['buku'] = DB::table('buku')->paginate(5);
            $data['buku'] = DB::table('buku')->get();
        }
        $data['title'] = "Pustaka";
        return view('admin.pustaka.pustaka', $data);
    }

    /**
     * Show the form for creating a new resource.
     */

    public function tmbh_pustaka()
    {
        $data['pustaka'] = buku::all();
        $data['kategori'] = kategori::all();
        $data['title'] = "Pustaka";
        return view('admin.pustaka.tmbh_pustaka', $data);
    }

    public function store(Request $request)
    {
        // $request->validate([
        //     'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        // ]);

        if ($request->hasFile('foto')) {
            $imagePath = $request->file('foto')->store('post-image', 'public');
        }

        $kodeauto = buku::selectRaw('LPAD(CONVERT(COUNT("kode_buku") + 1, char(8)) , 5,"0") as invoice')->first();
        $buku = new buku();
        $buku->kode_buku = 'BKU' . $kodeauto->invoice;
        $buku->judul = $request->judul;
        $buku->penulis = $request->penulis;
        $buku->penerbit = $request->penerbit;
        $buku->tahun_terbit = $request->tahun_terbit;
        $buku->foto = $imagePath;
        $buku->sinopsis = $request->sinopsis;
        $buku->save();
        $query = DB::table('buku')->where('judul', $request->judul)->first();
        foreach ($request->kategori as $list) {
            relasi_kategori::create([
                'id_buku' => $query->id,
                'id_kategori' => $list
            ]);
        }
        return redirect('/pustaka')->with('success', 'Input Data Berhasil !');
    }

    /**
     * Display the specified resource.
     */
    public function detail(string $id)
    {
        /////DETAIL KATEGORI
        $data['detail'] = buku::findOrFail($id);
        $data['relasi'] = $this->kategori_services->index()->where('relasi_kategori.id_buku', $id)->get();
        $data['title'] = "Pustaka";
        return view('admin.pustaka.detail_pustaka', $data);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $data['buku'] = buku::findOrFail($id);
        $data['kategori'] = kategori::all();
        $data['list_kategori'] = DB::table("relasi_kategori")->where("relasi_kategori.id_buku", $id)
            ->pluck('relasi_kategori.id_kategori', 'relasi_kategori.id_kategori')
            ->all();
        $data['title'] = "Pustaka";
        return view('admin.pustaka.edit_pustaka', $data);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        // $request->validate([
        //     'image' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        // ]);

        $pustaka = buku::findOrFail($id);

        if ($request->hasFile('foto')) {
            // Delete the old image
            if ($pustaka->foto) {
                Storage::disk('public')->delete($pustaka->foto);
            }

            // Store the new image
            $imagePath = $request->file('foto')->store('post-image', 'public');
            $pustaka->foto = $imagePath;
        }

        // dd($request->kategori);
        $pustaka->judul = $request->judul;
        $pustaka->penulis = $request->penulis;
        $pustaka->penerbit = $request->penerbit;
        $pustaka->tahun_terbit = $request->tahun_terbit;
        $pustaka->sinopsis = $request->sinopsis;
        $pustaka->save();
        $query = DB::table('buku')->where('judul', $request->judul)->first();
        $hapus = DB::table('relasi_kategori')->where('id_buku', $id)->delete();
        foreach ($request->kategori as $list) {
            relasi_kategori::create([
                'id_buku' => $query->id,
                'id_kategori' => $list
            ]);
        }
        return redirect('/pustaka')->with('success', 'Update Data Berhasil !');
    }

    public function destroy(string $id)
    {
        $buku = buku::findOrFail($id);
        if ($buku->foto) {
            Storage::disk('public')->delete($buku->foto);
        }
        $buku->delete();
        return redirect('/pustaka')->with('success', 'Delete Data Berhasil !');
    }
}
