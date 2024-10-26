<?php

namespace App\Http\Controllers;

use App\Models\anggota;
use App\Models\buku;
use Illuminate\Support\Facades\Auth;
use Carbon\Carbon;
use App\Models\koleksi;
use App\Models\keranjang;
use App\Models\peminjaman;
use App\Models\ulasan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Services\RiwayatServices;
use App\Services\KoleksiServices;
use App\Services\UlasanServices;

class storeController extends Controller
{
    /**
     * Display a listing of the resource.
     */

     protected $riwayat_services;
     protected $koleksi_services;
     protected $ulasan_services;

    public function __construct(RiwayatServices $riwayat_services, 
    KoleksiServices $koleksi_services, UlasanServices $ulasan_services)
    {
        $this->riwayat_services = $riwayat_services;
        $this->koleksi_services = $koleksi_services;
        $this->ulasan_services = $ulasan_services;
    }

    public function index()
    {
        return view('customer.store');
    }

    public function registrasi(Request $request)
    {
        $kodeauto = anggota::selectRaw('LPAD(CONVERT(COUNT("kode_anggota") + 1, char(8)) , 5,"0") as invoice')->first();
        $anggota = new anggota();
        $anggota->kode_anggota = 'AGT' . $kodeauto->invoice;
        $anggota->nama_lengkap = $request->emaill;
        $anggota->alamat = "Not Found";
        $anggota->jenis_kel = "Not Found";
        $anggota->email = $request->user;
        $anggota->password = bcrypt($request->password);
        $anggota->save();
        return redirect('/store')->with('success', 'Registrasi Berhasil !');
    }


    public function login(Request $request)
    {
        $credentials = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required']
        ]);

        if (Auth::guard('anggota')->attempt($credentials)) {
            $request->session()->regenerate();
            session()->put('id_anggota', Auth::guard('anggota')->user()->id);
            return redirect()->intended('hal_utama')->with('success', 'Selamat Datang !');
        }

        return back()->withErrors([
            // 'email' => 'Username / Password Salah !'
            'email' => 'Gagal Login !'
        ])->onlyInput('email');
    }

    public function hal_logout(Request $request)
    {
        Auth::guard('anggota')->logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/store');
    }

    //////////////Landing
    public function utama()
    {
        if (request('search_hal')) {
            $data['buku'] = buku::where('judul', 'like', '%' . request('search_hal') . '%')->get();
        } else {
            $data['buku'] = buku::all();
        }
        $data['title'] = "Home";
        return view('customer.landing.hal_utama', $data);
    }

    public function detail(string $id)
    {
        // $data['ulasan'] = DB::select('SELECT round(AVG(rating), 1) AS total FROM ulasan where id_buku = 7');
        $data['detail'] = buku::findOrFail($id);
        $data['ulasan'] =  DB::table('ulasan')->where('id_buku', $id)->avg('rating');
        $data['title'] = "Home";
        return view('customer.landing.hal_detail', $data);
    }

    public function delete_keranjang(string $id)
    {
        $keranjang = keranjang::findOrFail($id);
        $keranjang->delete();
        return redirect('/hal_keranjang');
    }

    public function keranjang()
    {
        $iduser = session()->get('id_anggota');
        $data['keranjang'] = DB::table('keranjang')->where('id_user', $iduser)->get();
        $data['title'] = "Home";
        return view('customer.landing.hal_keranjang', $data);
    }

    public function tmbh_pinjam(Request $request, string $id)
    {
        //if keranjang > 1
        $iduser = session()->get('id_anggota');
        $query = DB::table('buku')->where('id', $id)->first();
        $keranjang = DB::table('keranjang')->where('id_user', $iduser)->first();
        $exist = DB::table('keranjang')->where('id_user', $iduser)->where('id_buku', $id)->first();
        $sudahpinjam = DB::table('peminjaman')->where('id_user', $iduser)->where('status', 'pinjam')->first();
        if ($exist != null) {
            return redirect('/hal_utama')->with('warning', 'Buku Sudah Ada !');
        } else if ($keranjang != null) {
            return redirect('/hal_utama')->with('warning', 'Keranjang Penuh !');
        } else if ($sudahpinjam != null) {
            return redirect('/hal_utama')->with('warning', 'Gagal Meminjam !');
        } else {
            $keranjang = new keranjang();
            $keranjang->id_user = $iduser;
            $keranjang->id_buku = $query->id;
            $keranjang->kode_buku = $query->kode_buku;
            $keranjang->judul = $query->judul;
            $keranjang->penulis = $query->penulis;
            $keranjang->penerbit = $query->penerbit;
            $keranjang->tahun_terbit = $query->tahun_terbit;
            $keranjang->save();
            return redirect('/hal_keranjang');
        }
    }

    public function simpan_pinjam(Request $request, string $id)
    {
        $kodeauto = peminjaman::selectRaw('LPAD(CONVERT(COUNT("kode_pinjam") + 1, char(8)) , 5,"0") as invoice')->first();
        $iduser = session()->get('id_anggota');
        $query = DB::table('keranjang')->where('id', $id)->first();
        $peminjaman = new peminjaman();
        $peminjaman->kode_pinjam = 'PNJ' . $kodeauto->invoice;
        $peminjaman->id_user = $iduser;
        $peminjaman->id_buku = $query->id_buku;
        $peminjaman->tanggal_pinjam = Carbon::parse(now())->locale('id')->isoFormat('D MMMM Y');
        $peminjaman->tanggal_kembali = Carbon::parse(now())->addDays(7)->locale('id')->isoFormat('D MMMM Y');
        // $formating = Carbon::parse(now())->format('d F Y');
        // {{ \Carbon\Carbon::parse($cetak->date)->locale('id')->isoFormat('dddd, D MMMM Y') }}
        $peminjaman->status = 'pinjam';
        $peminjaman->save();

        $keranjang = keranjang::findOrFail($id);
        $keranjang->delete();
        $koleksi = DB::table('koleksi')->where('id_buku', $query->id_buku)->where('id_user', $iduser)->delete();
        return redirect('/hal_utama')->with('success', 'Peminjaman Berhasil !');
    }

    /////////Koleksi
    public function koleksi()
    {
        /////TAMPIL KOLEKSI
        $tampil_koleksi = $this->koleksi_services->index();
        $iduser = session()->get('id_anggota');
        $kodeauto = buku::selectRaw('LPAD(CONVERT(COUNT("kode_buku") + 1, char(8)) , 5,"0") as invoice')->first();
        if (request('search_hal')) {
            $data['buku'] = $tampil_koleksi->where('id_user', $iduser)->where('judul', 'like', '%' . request('search_hal') . '%')->get();
        } else {
            $data['buku'] = $tampil_koleksi->where('id_user', $iduser)->get();
        }
        $data['title'] = "Home";
        return view('customer.koleksi.hal_koleksi', $data);
    }

    public function detail_koleksi(string $id)
    {
        /////TAMPIL KOLEKSI
        $iduser = session()->get('id_anggota');
        $data['detail'] = $this->koleksi_services->index()->where('koleksi.id_buku', $id)->where('koleksi.id_user', $iduser)->first();
        // dd($data);
        $data['title'] = "Home";
        return view('customer.koleksi.detail_koleksi', $data);
    }

    public function tmbh_koleksi(Request $request, string $id)
    {
        $iduser = session()->get('id_anggota');
        $query = DB::table('buku')->where('id', $id)->first();
        $koleksi = DB::table('koleksi')->where('koleksi.id_buku', $query->id)->where('koleksi.id_user', $iduser)->first();
        if ($koleksi != null) {
            return redirect('/hal_utama')->with('warning', 'Buku Sudah Ada !');
        } else {
            $koleksi = new koleksi();
            $koleksi->id_buku = $query->id;
            $koleksi->id_user = $iduser;
            $koleksi->save();
            return redirect('/hal_koleksi');
        }
    }

    public function destroy(string $id)
    {
        // $iduser = session()->get('id_anggota');
        // $buku = DB::table('koleksi')->where('idbuku', $id)->where('id_user', $iduser)->first();
        $koleksi = koleksi::findOrFail($id);
        $koleksi->delete();
        return redirect('/hal_koleksi')->with('success', 'Delete Koleksi Berhasil !');
    }

    /////////Profile
    public function profil()
    {
        $data['anggota'] = anggota::all();
        $data['title'] = "Home";
        return view('customer.profile.hal_profil', $data);
    }

    public function edit(string $id)
    {
        $data['anggota'] = anggota::findOrFail($id);
        $data['title'] = "Home";
        return view('customer.profile.edit_profil', $data);
    }

    public function update(Request $request, string $id)
    {
        $anggota = anggota::findOrFail($id);
        $anggota->nama_lengkap = $request->nama_lengkap;
        $anggota->alamat = $request->alamat;
        $anggota->jenis_kel = $request->jenis_kel;
        $anggota->email = $request->email;
        $anggota->password = bcrypt($request->password);
        $anggota->save();
        return redirect('/hal_profil')->with('success', 'Update Data Berhasil !');
    }

    //////////////Riwayat
    public function riwayat()
    {
        /////TAMPIL RIWAYAT
        // SELECT peminjaman.id,peminjaman.kode_pinjam,peminjaman.id_user,peminjaman.id_buku,peminjaman.tanggal_pinjam,peminjaman.tanggal_kembali,peminjaman.status,buku.kode_buku,buku.judul,buku.penulis,buku.penerbit,buku.tahun_terbit,buku.sinopsis,anggota.kode_anggota,anggota.nama_lengkap,anggota.alamat,anggota.jenis_kel,anggota.email FROM peminjaman INNER JOIN buku ON peminjaman.id_buku = buku.id INNER JOIN anggota ON peminjaman.id_user = anggota.id;
        $iduser = session()->get('id_anggota');
        $data['riwayat'] = $this->riwayat_services->index()->where('peminjaman.id_user', $iduser)->get();
        $data['title'] = "Home";
        return view('customer.riwayat.hal_riwayat', $data);
    }

    public function detail_riwayat(string $id)
    {
        $data['detail'] = $this->riwayat_services->index()->where('peminjaman.id', $id)->first();
        $data['title'] = "Home";
        return view('customer.riwayat.detail_riwayat', $data);
    }

    public function struk(string $id)
    {
        $data['detail'] = $this->riwayat_services->index()->where('peminjaman.id', $id)->first();
        $data['title'] = "Home";
        return view('customer.riwayat.struk_riwayat', $data);
    }

    //////////////Ulasan
    public function tmbh_ulasan(string $id)
    {
        $data['detail'] = $this->riwayat_services->index()->where('peminjaman.id', $id)->first();
        $data['title'] = "Home";
        return view('customer.ulasan.tmbh_ulasan', $data);
    }

    public function simpan_ulasan(Request $request, string $id)
    {
        $data = $this->riwayat_services->index()->where('peminjaman.id', $id)->first();
        $ulasan = new ulasan();
        $ulasan->id_user = $data->id_user;
        $ulasan->id_buku = $data->id_buku;
        $ulasan->ulasan = $request->ulasan;
        $ulasan->rating = $request->rating;
        $ulasan->tanggal = Carbon::parse(now());
        $ulasan->save();

        $peminjaman = peminjaman::findOrFail($id);
        $peminjaman->status = 'selesai';
        $peminjaman->save();
        return redirect('/hal_utama')->with('success', 'Ulasan Berhasil !');
    }

    public function ulasan(Request $request, string $id)
    {
        /////TAMPIL ULASAN
        $data['ulasan'] = $this->ulasan_services->index()->orderBy('ulasan.tanggal', 'desc')->where('ulasan.id_buku', $id)->get();
        $data['buku'] = DB::table('buku')->where('id', $id)->first();
        $data['title'] = "Home";
        return view('customer.ulasan.hal_ulasan', $data);
    }
}
