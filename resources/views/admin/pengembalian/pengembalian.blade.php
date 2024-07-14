@extends('layouts.kembali')

{{-- @section('title', 'Laravel - Barang') --}}

@section('content')

    <section id="content">
        <!-- NAVBAR -->
        <nav>
            <i class='bx bx-menu'></i>
            <a href="#" class="nav-link"></a>
            <form action="">
                <div class="form-input">
                    <input type="search" placeholder="Pencarian !">
                    <button type="submit" class="search-btn"><i class='bx bx-search'></i></button>
                </div>
            </form>
            <input type="checkbox" id="switch-mode" hidden>
            <label for="switch-mode" class="switch-mode"></label>
            <a href="#" class="notification">
                <i class='bx bxs-bell'></i>
                <span class="num">2</span>
            </a>
            <a href="" class="profile">
                <img src="img/images2.png">
            </a>
        </nav>
        <!-- NAVBAR -->
        <main>
            @if ($kembali == null)
                <div class="head-title">
                    <div class="left">
                        <h1>Pengembalian Pustaka</h1>
                        <ul class="breadcrumb">
                            <li>
                                <a href="#">Data Transaksi</a>
                            </li>
                            <li><i class='bx bx-chevron-right'></i></li>
                            <li>
                                <a class="active" href="#">Home</a>
                            </li>
                        </ul>
                    </div>
                    <a href="/tmbh_pengembalian" class="btn-download">
                        <i class='bx bx-search'></i>
                        <span class="text">Input Pengembalian</span>
                    </a>
                </div>
            @endif

            @if ($kembali != null)
                <div class="head-title">
                    <div class="left">
                        <h1>Pengembalian Pustaka</h1>
                        <ul class="breadcrumb">
                            <li>
                                <a href="#">Data Transaksi</a>
                            </li>
                            <li><i class='bx bx-chevron-right'></i></li>
                            <li>
                                <a class="active" href="#">Home</a>
                            </li>
                        </ul>
                    </div>
                    <a href="/tmbh_pengembalian" class="btn-download2">
                        <i class='bx bx-search'></i>
                        <span class="text">Input Pengembalian</span>
                    </a>
                </div>

                <div class="table-data">
                    <div class="order">
                        <div class="head">
                            <i class='bx bx-search'></i>
                            <i class='bx bx-filter'></i>
                        </div>
                        <table>
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Nama</th>
                                    <th>Kode</th>
                                    <th>Judul</th>
                                    <th>Tanggal Pinjam</th>
                                    <th>Tanggal Kembali</th>
                                    <th>Status</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    @csrf
                                    <td>{{ $kembali->kode_pinjam }}</td>
                                    <td>{{ $kembali->nama_lengkap }}</td>
                                    <td>{{ $kembali->kode_buku }}</td>
                                    <td>{{ $kembali->judul }}</td>
                                    <td>{{ $kembali->tanggal_pinjam }}</td>
                                    <td>{{ $kembali->tanggal_kembali }}</td>
                                    <td>
                                        @if ($kembali->status == 'pinjam')
                                            <span class="status completed">Pinjam</span>
                                        @endif
                                        @if ($kembali->status == 'kembali')
                                            <span class="status selesai">Kembali</span>
                                        @endif
                                        @if ($kembali->status == 'selesai')
                                            <span class="status selesai">Selesai</span>
                                        @endif
                                    </td>
                                    <td class="col-2 text-center">
                                        <a href="/hapus-pengembalian"
                                            onclick="return confirm('Apakah Yakin Mau Hapus Data?')"><span
                                                class="status pending">Hapus</span></a>
                                    </td>
                                </tr>
                            </tbody>

                        </table>
                        <main>
                    </div>
                </div>
                <div class="head-title2" style="margin-top: 5px">
                    <a href="/ajukan_pengembalian/{{$kembali->id}}" onclick="return confirm('Apakah Yakin Mau Ajukan Pengembalian?')"
                        class="btn-download">
                        <i class='bx bxs-doughnut-chart'></i>
                        <span class="text">Ajukan Pengembalian</span>
                    </a>
                </div>
            @endif
        </main>
    </section>

@endsection
