<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Library - Website</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('bootstrap/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/navbarrr.css') }}">
    <link rel="stylesheet" href="{{ asset('css/keranjang.css') }}">
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
            <a href="/hal_logout" class="profile" style="padding-left: auto; margin-bottom: 3px;"
                onclick="return confirm('Apakah Yakin Mau Logout?')">
                <img src="img/profile_store.jpg">
            </a>
        </nav>
        <!-- NAVBAR -->
        <!-- MAIN -->
        <main>
            <h2 name="nama"
                style="font-size: 35px; font-family: 'Times New Roman', Times, serif; margin-top: 20px; margin-left: 20px;">
                Keranjang Peminjaman Anda</h2>
            {{-- <form action="" method="post"> --}}
            <div class="head-title2">
                <a href="/hal_utama" class="btn-download" style="margin-left: 20px;">
                    <i class='bx bxs-book-bookmark'></i>
                    <button class="button is-primary" style="cursor: pointer;" type="submit" name="batal"
                        value="Batal">Pilih Pustaka</button>
                </a>
            </div>
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
                                <th>Kode</th>
                                <th>Judul</th>
                                <th>Penulis</th>
                                <th>Penerbit</th>
                                <th>Tahun Terbit</th>
                                <th class="">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                @csrf
                                <?php $no = 1; ?>
                                <?php $ni = 1; ?>
                                @foreach ($keranjang as $list)
                                    <td>{{$no++}}</td>
                                    <td>{{ $list->kode_buku }}</td>
                                    <td>{{ $list->judul }}</td>
                                    <td>{{ $list->penulis }}</td>
                                    <td>{{ $list->penerbit }}</td>
                                    <td>{{ $list->tahun_terbit }}</td>
                                    <td>
                                        <form action="/delete_keranjang/{{ $list->id }}" method="post">
                                            @csrf
                                            @method('delete')
                                            <button type="submit" class="" style="border: 0px; cursor: pointer;"
                                                onclick="return confirm('Apakah Yakin Mau Hapus Data?')"><span
                                                    class="status pending">Hapus</span></button>
                                        </form>
                                    </td>
                            </tr>

                        </tbody>
                    </table>
                </div>
            </div>
            <div class="head-title">
                <!-- margin-right: 30px; -->
                {{-- <a href="" class="btn-download"> --}}
                    <a href="/simpan-pinjam/{{ $list->id }}" class="btn-download">
                    <i class='bx bxs-book-bookmark'></i>
                    <button class="button is-primary" style="cursor: pointer;" type="submit" name="simpan"
                        value="Simpan" onclick="return confirm('Apakah Yakin Ingin Pinjam Pustaka?')">Pinjam
                        Pustaka</button>
                </a>
                @endforeach
            </div>
            {{-- </form> --}}
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
