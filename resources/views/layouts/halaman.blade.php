<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('bootstrap/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/navbarrr.css') }}">
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
    <title>Library - Website</title>
</head>

<body>
    <!-- CONTENT -->
    <section id="content">
        <!-- NAVBAR -->
        <nav>
            <a href="/hal_utama" class="nav-link">
                <i class='bx bxs-book-bookmark'></i>
                <span class="text">My Library</span>
            </a>
            <form action="#">
                <div class="form-input1">
                    <input type="search" name="search_hal" placeholder="Pencarian !" value="{{ request('search_hal') }}">
                    <button type="submit" class="search-btn"><i class='bx bx-search'></i></button>
                </div>
            </form>
            <a href="/hal_keranjang" class="cart">
                <i class='bx bxs-cart-alt'></i>
            </a>
            <a href="#" class="notification">
                <i class='bx bxs-bell'></i>
                <span class="num">2</span>
            </a>
            <a href="/hal_profil" class="profile">
                <img src="img/profile_store.jpg">
            </a>
        </nav>
        <!-- NAVBAR -->
        <!-- MAIN -->

        @yield('content')

        <!-- MAIN -->
    </section>
    <!-- CONTENT -->
    <script src="{{ asset('bootstrap/bootstrap.min.js') }}"></script>
    <script src="{{ asset('bootstrap/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('js/fontawesome.js') }}"></script>
    <script src="{{ asset('js/jquery.min.js') }}"></script>
    <script src="{{ asset('js/script.js') }}"></script>
    <script src="{{ asset('sweetalert2/sweetalert2.min.js') }}"></script>
    @include('sweetalert::alert')
</body>

</html>
