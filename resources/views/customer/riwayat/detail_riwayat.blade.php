<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Pilot - Website</title>
    <link rel="stylesheet" href="{{ asset('bootstrap/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/cloud.css') }}">
    <link rel="stylesheet" href="{{ asset('css/detailpess.css') }}">
    <link rel="stylesheet" href="{{ asset('css/font-awesome.css') }}">
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
    <!-- partial:index.partial.html -->
    <div class="modal">
        <article class="modal-container">
            <header class="modal-container-header">
                <h1 class="modal-container-title">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24"
                        aria-hidden="true">
                        <path fill="none" d="M0 0h24v24H0z" />
                        <path fill="currentColor"
                            d="M14 9V4H5v16h6.056c.328.417.724.785 1.18 1.085l1.39.915H3.993A.993.993 0 0 1 3 21.008V2.992C3 2.455 3.449 2 4.002 2h10.995L21 8v1h-7zm-2 2h9v5.949c0 .99-.501 1.916-1.336 2.465L16.5 21.498l-3.164-2.084A2.953 2.953 0 0 1 12 16.95V11zm2 5.949c0 .316.162.614.436.795l2.064 1.36 2.064-1.36a.954.954 0 0 0 .436-.795V13h-5v3.949z" />
                    </svg>
                    Detail Riwayat
                </h1>
                <a href="/hal_riwayat"><button class="icon-button">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24">
                            <path fill="none" d="M0 0h24v24H0z" />
                            <path fill="currentColor"
                                d="M12 10.586l4.95-4.95 1.414 1.414-4.95 4.95 4.95 4.95-1.414 1.414-4.95-4.95-4.95 4.95-1.414-1.414 4.95-4.95-4.95-4.95L7.05 5.636z" />
                        </svg>
                    </button></a>
            </header>
            <section class="modal-container-body rtf">
                <p
                    style="margin-left: 25px; margin-bottom: 10px; font-size: 22px; font-family:'Segoe UI', Tahoma, Geneva, Verdana, sans-serif">
                    Keterangan Peminjaman :</p>
                <div class="table-data">
                    <div class="order">
                        <div class="head">
                            <i class='bx bx-search'></i>
                            <i class='bx bx-filter'></i>
                        </div>
                        <table>
                            <thead>
                                <tr>
                                    <th>Kode</th>
                                    <th>Nama</th>
                                    <th>Tanggal Pinjam</th>
                                    <th>Tanggal Kembali</th>
                                    <th>Status</th>
                                </tr>
                            </thead>
                            <tbody>
                                @csrf
                                <td>{{ $detail->kode_pinjam }}</td>
                                <td>{{ $detail->nama_lengkap }}</td>
                                <td>{{ $detail->tanggal_pinjam }}</td>
                                <td>{{ $detail->tanggal_kembali }}</td>
                                <td>
                                    @if ($detail->status == 'pinjam')
                                        <span class="status process">Pinjam</span>
                                    @endif
                                    @if ($detail->status == 'kembali')
                                        <span class="status selesai">Kembali</span>
                                    @endif
                                    @if ($detail->status == 'selesai')
                                        <span class="status selesai">Selesai</span>
                                    @endif
                                </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
                <hr style="color:black ; height: 2px;">
                <!-- <p style="color: blue;">----------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------</p> -->
                <p
                    style="margin-left: 25px; margin-bottom: 10px; font-size: 22px; font-family:'Segoe UI', Tahoma, Geneva, Verdana, sans-serif">
                    Detail Pustaka :</p>


                <div class="table-data">
                    <div class="order">
                        <div class="head">
                            <!-- <h3>Recent Orders</h3> -->
                            <i class='bx bx-search'></i>
                            <i class='bx bx-filter'></i>
                        </div>
                        <table>
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>ID Buku</th>
                                    <th>Judul</th>
                                    <th>Penulis</th>
                                    <th>Penerbit</th>
                                    <th>Tahun Terbit</th>
                                </tr>
                            </thead>
                            <tbody>
                                @csrf
                                <td>1</td>
                                <td>{{ $detail->kode_buku }}</td>
                                <td>{{ $detail->judul }}</td>
                                <td>{{ $detail->penulis }}</td>
                                <td>{{ $detail->penerbit }}</td>
                                <td>{{ $detail->tahun_terbit }}</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>


            </section>
            <footer class="modal-container-footer">
                @if ($detail->status == 'pinjam')
                <a href="/struk_riwayat/{{$detail->id}}"><button class="button is-primary">Lihat Bukti</button></a>
                @endif
                @if ($detail->status == 'kembali')
                <a href="/tmbh_ulasan/{{$detail->id}}"><button class="button is-success">Berikan Ulasan</button></a>
                @endif
                @if ($detail->status == 'selesai')
                <a href="/struk_riwayat/{{$detail->id}}"><button class="button is-primary">Lihat Bukti</button></a>
                @endif
                <a href="/hal_riwayat"><button class="button is-danger">Keluar</button></a>
                </form>
            </footer>
        </article>
    </div>
    <!-- partial -->
    <script src="{{ asset('bootstrap/bootstrap.min.js') }}"></script>
    <script src="{{ asset('js/fontawesome.js') }}"></script>
    <script src="{{ asset('js/jquery.min.js') }}"></script>
    <script src="{{ asset('js/script.js') }}"></script>
    <script src="{{ asset('sweetalert2/sweetalert2.min.js') }}"></script>
    @include('sweetalert::alert')

</body>

</html>
