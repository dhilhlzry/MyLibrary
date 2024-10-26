@extends('layouts.halaman')

@section('content')
    <main>
        <div class="row">
            <div class="col-lg-3 sticky-top" style=" height: 100%; width: 200px;">
                <div class="card" style="width: 15rem;left: 10px;">
                    <div class="card-header"
                        style="font-size: 30px; font-weight: 700; font-family: 'Times New Roman', Times, serif; cursor: pointer;">
                        My Homepage
                    </div>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item" style="cursor: pointer;"><a href="/hal_koleksi"
                                style="color: black;">Koleksi Saya</a></li>
                        <li class="list-group-item" style="cursor: pointer;"><a href="/hal_riwayat"
                                style="color: black;">Riwayat Peminjaman</a></li>
                        <li class="list-group-item" style="cursor: pointer;"><a href="" style="color: black;">Pilihan
                                Lainnya</a></li>
                        <li class="list-group-item" style="cursor: pointer;"><a href="/hal_logout"
                                onclick="return confirm('Apakah Yakin Ingin Logout ?')" style="color: red;">Keluar Halaman
                            </a></li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-10" style=" height: 100%;">
                <div class="row">
                    @csrf
                    @foreach ($buku as $list)
                        <div class="col-md-2 mb-3 ">
                            <div class="card h-200" style="width: 14rem; height: 23rem; left: 65px;">
                                <div class="image-box" style="height: 18rem;">
                                    <img src="{{ asset('storage/' . $list->foto) }}" class="card-img-top" alt="">
                                </div>
                                <div class="card-body">
                                    <div style="display: flex; gap: 20px;">
                                        <p class="card-text text-harga" style="margin-top: 7px;">{{ $list->tahun_terbit }}
                                        </p>
                                        <a href="/hal_detail/{{ $list->id }}" class="btn btn-primary"
                                            style="height: 40px;">Lihat Detail</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
    </main>
@endsection
