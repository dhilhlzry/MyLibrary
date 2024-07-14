<?php

namespace App\Http\Controllers;

use App\Models\anggota;

class anggotaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        if (request('search_aggota')) {
            $data['anggota'] = anggota::where('nama_lengkap', 'like', '%' . request('search_aggota') . '%')->get();
        }else{
            $data['anggota'] = anggota::all();
        }
        $data['title'] = "Anggota";
        return view('admin.anggota.anggota',$data);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function detail(string $id)
    {
        $data['detail'] = anggota::findOrFail($id);
        $data['title'] = "Anggota";
        return view('admin.anggota.detail_anggota',$data);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $anggota = anggota::findOrFail($id);
        $anggota->delete();
        return redirect('/anggota')->with('success', 'Delete Data Berhasil !');
    }
}
