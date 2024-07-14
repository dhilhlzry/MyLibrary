@extends('layouts.navbar')

{{-- @section('title','Laravel - Barang') --}}

@section('content')

<section id="content">
    <!-- NAVBAR -->
    <nav>
        <i class='bx bx-menu'></i>
        <a href="#" class="nav-link"></a>
        <form action="/anggota">
            <div class="form-input">
                <input type="search" name="search_aggota" id="search_aggota" value="{{ request('search_aggota') }}" placeholder="Pencarian !">
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
        <div class="head-title">
            <div class="left">
                <h1>Data Anggota</h1>
                <ul class="breadcrumb">
                    <li>
                        <a href="#">Data Master</a>
                    </li>
                    <li><i class='bx bx-chevron-right'></i></li>
                    <li>
                        <a class="active" href="#">Home</a>
                    </li>
                </ul>
            </div>
            <a href="/tmbh_pustaka" class="btn-download2">
                <i class='bx bx-plus'></i>
                <span class="text">Tambah Data</span>
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
                            <th>Nama</th>
                            <th>Alamat</th>
                            <th>Jenis kel</th>
                            <th>Email</th>
                            <th class="">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                            <tr>
                                @csrf
                                <?php $no = 1; ?>
                                <?php $ni = 1; ?>
                                @foreach ($anggota as $list)
                                <td>{{$no++}}</td>
                                <td>{{$list->nama_lengkap}}</td>
                                <td>{{$list->alamat}}</td>
                                <td>{{$list->jenis_kel}}</td>
                                <td>{{$list->email}}</td>
                                <td class="" style="display: flex; gap: 8px; width: auto; justify-content: center; ">
                                    <a href="/detail_anggota/{{$list->id}}"><span class="status completed">Detail</span></a>
                                    {{-- <a href="/edit_barang/{{$list->idanggota}}"><span class="status completed">Edit</span></a> --}}
                                    <form action="/delete_anggota/{{$list->id}}" method="post" >
                                        @csrf
                                        @method('delete')
                                        <button type="submit" class="" style="border: 0px; cursor: pointer; border-radius: 20px;" onclick="return confirm('Apakah Yakin Mau Hapus Data?')"><span class="status pending">Hapus</span></button>
                                    </form>
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
