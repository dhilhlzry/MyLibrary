<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/homeee.css') }}">
    <link rel="stylesheet" href="{{ asset('css/font-awesome.css') }}">
    <link rel="stylesheet" href="{{ asset('fontawesome/font.css') }}">
    <link rel="stylesheet" href="{{ asset('boxicons/box.css') }}">
    {{-- <link rel="stylesheet" href="{{ asset('tailwind/ouput.css') }}"> --}}
    <link rel="stylesheet" href="{{ asset('sweetalert2/sweetalert2.min.css') }}">
    {{-- <script src="https://cdn.tailwindcss.com"></script> --}}
    <style>
        .swal2-popup {
            font-size: 1.2rem !important;
        }
    </style>
    <title>Library - Website</title>
</head>

<body>
    @if (auth()->user()->level == 'Admin')
        <!-- SIDEBAR -->
        <section id="sidebar">
            <a href="" class="brand">
                <i class='bx bxs-book-bookmark' style='margin-top:2px; padding-left:5px;'></i>
                <span class="text">My Library</span>
            </a>
            <ul class="side-menu top">
                <li class="{{ $title === 'Home' ? 'active' : '' }}">
                    <a href="/home">
                        <i class='bx bxs-dashboard'></i>
                        <span class="text">Dashboard</span>
                    </a>
                </li>
                <li class="{{ $title === 'Pustaka' ? 'active' : '' }}">
                    <a href="/pustaka">
                        <i class='bx bxs-book'></i>
                        <span class="text">Data Pustaka</span>
                    </a>
                </li>
                <li class="{{ $title === 'Kategori' ? 'active' : '' }}">
                    <a href="/kategori">
                        <i class='bx bxs-data'></i>
                        <span class="text">Data Kategori</span>
                    </a>
                </li>
                <li class="{{ $title === 'Petugas' ? 'active' : '' }}">
                    <a href="/petugas">
                        <i class='bx bxs-wrench'></i>
                        <span class="text">Data Petugas</span>
                    </a>
                </li>
                <li class="{{ $title === 'Anggota' ? 'active' : '' }}">
                    <a href="/anggota">
                        <i class='bx bxs-group'></i>
                        <span class="text">Data Anggota</span>
                    </a>
                </li>
            </ul>
            <ul class="side-menu top">
                <li class="{{ $title === 'Pengembalian' ? 'active' : '' }}">
                    <a href="/pengembalian">
                        <i class='bx bxs-doughnut-chart'></i>
                        <span class="text">Input Pengembalian</span>
                    </a>
                </li>
                <li class="{{ $title === 'Laporan' ? 'active' : '' }}">
                    <a href="/laporan">
                        <i class='bx bxs-file'></i>
                        <span class="text">Cetak Laporan</span>
                    </a>
                </li>
            </ul>
            <ul class="side-menu">
                <li>
                    <a href="">
                        <i class='bx bxs-cog'></i>
                        <span class="text">Settings</span>
                    </a>
                </li>
                <li>
                    <a href="/logout" class="logout" onclick="return confirm('Apakah Yakin Ingin Logout ?')">
                        <i class='bx bxs-log-out-circle'></i>
                        <span class="text">Logout</span>
                    </a>
                </li>
            </ul>
        </section>
    @endif
    @if (auth()->user()->level == 'Petugas')
        <!-- SIDEBAR -->
        <section id="sidebar">
            <a href="" class="brand">
                <i class='bx bxs-book-bookmark' style='margin-top:2px; padding-left:5px;'></i>
                <span class="text">My Library</span>
            </a>
            <ul class="side-menu top">
                <li class="{{ $title === 'Home' ? 'active' : '' }}">
                    <a href="/home">
                        <i class='bx bxs-dashboard'></i>
                        <span class="text">Dashboard</span>
                    </a>
                </li>
                <li class="{{ $title === 'Pustaka' ? 'active' : '' }}">
                    <a href="/pustaka">
                        <i class='bx bxs-book'></i>
                        <span class="text">Data Pustaka</span>
                    </a>
                </li>
                <li class="{{ $title === 'Kategori' ? 'active' : '' }}">
                    <a href="/kategori">
                        <i class='bx bxs-data'></i>
                        <span class="text">Data Kategori</span>
                    </a>
                </li>
                <li class="{{ $title === 'Anggota' ? 'active' : '' }}">
                    <a href="/anggota">
                        <i class='bx bxs-group'></i>
                        <span class="text">Data Anggota</span>
                    </a>
                </li>
            </ul>
            <ul class="side-menu top">
                <li class="{{ $title === 'Pengembalian' ? 'active' : '' }}">
                    <a href="/pengembalian">
                        <i class='bx bxs-doughnut-chart'></i>
                        <span class="text">Input Pengembalian</span>
                    </a>
                </li>
                <li class="{{ $title === 'Laporan' ? 'active' : '' }}">
                    <a href="/laporan">
                        <i class='bx bxs-file'></i>
                        <span class="text">Cetak Laporan</span>
                    </a>
                </li>
            </ul>
            <ul class="side-menu">
                <li>
                    <a href="">
                        <i class='bx bxs-cog'></i>
                        <span class="text">Settings</span>
                    </a>
                </li>
                <li>
                    <a href="/logout" class="logout" onclick="return confirm('Apakah Yakin Mau Logout ?')">
                        <i class='bx bxs-log-out-circle'></i>
                        <span class="text">Logout</span>
                    </a>
                </li>
            </ul>
        </section>
    @endif
    <!-- SIDEBAR -->
    <!-- CONTENT -->

    @yield('content')


    <!-- CONTENT -->
    <script src="{{ asset('js/fontawesome.js') }}"></script>
    <script src="{{ asset('js/jquery.min.js') }}"></script>
    <script src="{{ asset('js/script.js') }}"></script>
    <script src="{{ asset('sweetalert2/sweetalert2.min.js') }}"></script>
    @include('sweetalert::alert')
    {{-- <script>
        // @if ($alert == 'selamat')
        //     Swal.fire({
        //         title: "Selamat Datang Admin !",
        //         icon: "success",
        //         confirmButtonColor: "#3085d6",
        //         confirmButtonText: "Ok"
        //     }).then((result) => {
        //         if (result.isConfirmed) {}
        //     });
        // @endif
    </script> --}}
</body>

</html>
