<?php

namespace App\Http\Controllers;

use App\Models\petugas;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class petugasController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        if (request('search')) {
            $data['petugas'] = petugas::where('name', 'like', '%' . request('search') . '%')->get();
        }else{
            $data['petugas'] = petugas::all();
        }
        $data['title'] = "Petugas";
        return view('admin.petugas.petugas',$data);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function tmbh_petugas()
    {
        $data['petugas'] = petugas::all();
        $data['title'] = "Petugas";
        return view('admin.petugas.tmbh_petugas',$data);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $petugas = new petugas();
        $petugas->name = $request->name;
        $petugas->alamat = $request->alamat;
        $petugas->jenis_kel = $request->jenis_kel;
        $petugas->no_telp = $request->no_telp;
        $petugas->email = $request->email;
        $petugas->password = bcrypt($request->password);
        // $petugas->image = $request->file('image')->store('post-image');
        $petugas->level = $request->level;
        $petugas->save();
       return redirect('/petugas')->with('success', 'Input Data Berhasil !');
    }

    /**
     * Display the specified resource.
     */
    public function detail($id)
    {
        $data['detail'] = petugas::findOrfail($id);
        $data['title'] = "Petugas";
        return view('admin.petugas.detail_petugas', $data);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $data['petugas'] = petugas::findOrFail($id);
        $data['title'] = "Petugas";
        return view('admin.petugas.edit_petugas', $data);
    }

    /**
     * Update the specified resource in storage.
     */

    public function update(Request $request, string $id)
    {
        $petugas = petugas::findOrFail($id);
        $petugas->name = $request->name;
        $petugas->alamat = $request->alamat;
        $petugas->jenis_kel = $request->jenis_kel;
        $petugas->no_telp = $request->no_telp;
        $petugas->email = $request->email;
        $petugas->password = bcrypt($request->password);
        $petugas->level = $request->level;
        $petugas->save();
       return redirect('/petugas')->with('success', 'Update Data Berhasil !');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $petugas = petugas::findOrFail($id);
        $petugas->delete();
        return redirect('/petugas')->with('success', 'Delete Data Berhasil !');
    }
}
