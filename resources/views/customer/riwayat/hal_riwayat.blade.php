<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Library - Website</title>
    <link rel="stylesheet" href="{{ asset('bootstrap/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/navbarrr.css') }}">
    <link rel="stylesheet" href="{{ asset('css/riwayat.css') }}">
    {{-- Complements --}}
    <link rel="stylesheet" href="{{ asset('fontawesome/font-awesome.css') }}">
    <link rel="stylesheet" href="{{ asset('fontawesome/font.css') }}">
    <link rel="stylesheet" href="{{ asset('boxicons/box.css') }}">
    <link rel="stylesheet" href="{{ asset('sweetalert2/sweetalert2.min.css') }}">
    <style>
        .swal2-popup {
            font-size: 1.2rem !important;
        }
    </style>
</head>

<body>
    <!-- CONTENT -->
    <section id="content">
        <!-- NAVBAR -->
        <nav>
            <a href="/hal_utama" class="nav-link" style="margin-right: auto; margin-bottom: 8px;">
                <i class='bx bxs-book-bookmark'></i>
                <span class="text">My Library</span>
            </a>

            <a href="/hal_utama" class="home" style="margin-left: auto;">
                <i class='bx bxs-log-out-circle'></i>
            </a>
            <a href="#" class="notification" style="padding-left: auto;">
                <i class='bx bxs-bell' style="float: right;"></i>
                <span class="num">2</span>
            </a>
            <a href="/hal_profil" class="profile" style="padding-left: auto; margin-bottom: 3px;">
                <img src="img/profile_store.jpg">
            </a>
        </nav>
        <!-- NAVBAR -->
        <!-- MAIN -->
        <main>
            <h2 name="nama"
                style="font-size: 35px; font-family: 'Times New Roman', Times, serif; margin-top: 20px; margin-left: 20px;">
                Daftar Riwayat Peminjaman</h2>
            <div class="table-data">
                <div class="order">
                    <div class="head">
                        <i class='bx bx-search'></i>
                        <i class='bx bx-filter'></i>
                    </div>
                    <table>
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Kode</th>
                                <th>Judul</th>
                                <th>Penulis</th>
                                <th>Tahun Terbit</th>
                                <th>Tanggal Pinjam</th>
                                <th>Status</th>
                                <th class="">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                @csrf
                                <?php $no = 1; ?>
                                <?php $ni = 1; ?>
                                @foreach ($riwayat as $list)
                                    <td>{{ $no++ }}</td>
                                    <td>{{ $list->kode_pinjam }}</td>
                                    <td>{{ $list->judul }}</td>
                                    <td>{{ $list->penulis }}</td>
                                    <td>{{ $list->tahun_terbit }}</td>
                                    <td>{{ $list->tanggal_pinjam }}</td>
                                    <td>
                                        @if ($list->status == 'pinjam')
                                            <span class="status kembali">Pinjam</span>
                                        @endif
                                        @if ($list->status == 'kembali')
                                            <span class="status selesai">Kembali</span>
                                        @endif
                                        @if ($list->status == 'selesai')
                                            <span class="status selesai">Selesai</span>
                                        @endif
                                    </td>
                                    <td class="col-2 text-center">
                                        <a href="/detail_riwayat/{{$list->id}}"><span class="status completed">Lihat Detail</span></a>
                                    </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </main>
        <!-- MAIN -->
    </section>
    <!-- CONTENT -->
    <script src="{{ asset('bootstrap/bootstrap.min.js') }}"></script>
    <script src="{{ asset('js/fontawesome.js') }}"></script>
    <script src="{{ asset('js/jquery.min.js') }}"></script>
    <script src="{{ asset('js/script.js') }}"></script>
    <script src="{{ asset('sweetalert2/sweetalert2.min.js') }}"></script>
    @include('sweetalert::alert')
</body>

</html>
