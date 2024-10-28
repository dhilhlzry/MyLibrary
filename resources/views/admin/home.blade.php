@extends('layouts.navbar')

@section('content')

<section id="content">
    <!-- NAVBAR -->
    <nav>
        <i class='bx bx-menu'></i>
        <a href="#" class="nav-link"></a>
        <form action="#">
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
            <img src="img/profile_home.png">
        </a>
    </nav>
    <!-- NAVBAR -->
        <main>
            <div class="head-title">
                <div class="left">
                    <h1>Dashboard</h1>
                    <ul class="breadcrumb">
                        <li>
                            <a href="#">Username</a>
                        </li>
                        <li><i class='bx bx-chevron-right'></i></li>
                        <li>
                            <a class="active" href="#">{{ auth()->user()->name }}</a>
                        </li>
                    </ul>
                </div>
            </div>
            <ul class="box-info">
                <li>
                    <i class='bx bx-book'></i>
                    <span class="text">
                        <h3>{{ $buku }}</h3>
                        <p>Total Pustaka</p>
                    </span>
                </li>
                <li>
                    <i class='bx bxs-group'></i>
                    <span class="text">
                        <h3>{{ $anggota }}</h3>
                        <p>Total Anggota</p>
                    </span>
                </li>
                <li>
                    <i class='bx bxs-wrench'></i>
                    <span class="text">
                        <h3>{{ $petugas }}</h3>
                        <p>Total Petugas</p>
                    </span>
                </li>
            </ul>
        </main>
</section>


@endsection
