@extends('layouts.laporan')

{{-- @section('title', 'Laravel - Barang') --}}

@section('content')
    <section id="content">
        <!-- NAVBAR -->
        <nav>
            <i class='bx bx-menu'></i>
            <a href="#" class="nav-link"></a>
            <form action="/laporan">
                <div class="form-input">
                    <input type="search" name="search_laporan" id="search_laporan" value="{{ request('search_laporan') }}"
                        placeholder="Pencarian !">
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
                <img src="img/profile_home.png">
            </a>
        </nav>
        <!-- NAVBAR -->

        <!-- MAIN -->
        <main>
            <div class="head-title">
                <div class="left">
                    <h1>Cetak Laporan</h1>
                    <ul class="breadcrumb">
                        <li>
                            <a href="#">Data Laporan</a>
                        </li>
                        <li><i class='bx bx-chevron-right'></i></li>
                        <li>
                            <a class="active" href="#">Home</a>
                        </li>
                        </li>
                    </ul>
                </div>
                <a href="/modal_laporan" class="btn-download">
                    <i class='bx bx-file'></i>
                    <span class="text">Cetak Laporan</span>
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
                                <th class="">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                @csrf
                                <?php $no = 1; ?>
                                <?php $ni = 1; ?>
                                @foreach ($laporan as $list)
                                    <td>{{ $list->kode_pinjam }}</td>
                                    <td>{{ $list->nama_lengkap }}</td>
                                    <td>{{ $list->kode_buku }}</td>
                                    <td>{{ $list->judul }}</td>
                                    <td>{{ $list->tanggal_pinjam }}</td>
                                    <td>{{ $list->tanggal_kembali }}</td>
                                    {{-- {{ \Carbon\Carbon::parse($cetak->date)->locale('id')->isoFormat('dddd, D MMMM Y') }} --}}
                                    <td>
                                        @if ($list->status == 'pinjam')
                                            <span class="status completed">Pinjam</span>
                                        @endif
                                        @if ($list->status == 'kembali')
                                            <span class="status selesai">Kembali</span>
                                        @endif
                                        @if ($list->status == 'selesai')
                                            <span class="status selesai">Selesai</span>
                                        @endif
                                    </td>
                                    <td class="col-2 text-center">
                                        <a href="/detail_laporan/{{$list->id}}"><span class="status process">Detail</span></a>
                                        <a href="/delete_laporan" onclick="return confirm('Apakah Yakin Mau Hapus Data?')"><span class="status pending">Hapus</span></a>
                                    </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </main>
    </section>
@endsection
