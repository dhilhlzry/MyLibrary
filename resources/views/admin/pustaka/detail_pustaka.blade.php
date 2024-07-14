@extends('layouts.detail')

{{-- @section('title', 'Laravel - Barang') --}}

@section('content')
    <div class="modal">
        <article class="modal-container">
            <header class="modal-container-header">
                <h1 class="modal-container-title">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24" aria-hidden="true">
                        <path fill="none" d="M0 0h24v24H0z" />
                        <path fill="currentColor"
                            d="M14 9V4H5v16h6.056c.328.417.724.785 1.18 1.085l1.39.915H3.993A.993.993 0 0 1 3 21.008V2.992C3 2.455 3.449 2 4.002 2h10.995L21 8v1h-7zm-2 2h9v5.949c0 .99-.501 1.916-1.336 2.465L16.5 21.498l-3.164-2.084A2.953 2.953 0 0 1 12 16.95V11zm2 5.949c0 .316.162.614.436.795l2.064 1.36 2.064-1.36a.954.954 0 0 0 .436-.795V13h-5v3.949z" />
                    </svg>
                    Detail Pustaka
                </h1>
                <a href="/pustaka"><button class="icon-button">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24">
                            <path fill="none" d="M0 0h24v24H0z" />
                            <path fill="currentColor"
                                d="M12 10.586l4.95-4.95 1.414 1.414-4.95 4.95 4.95 4.95-1.414 1.414-4.95-4.95-4.95 4.95-1.414-1.414 4.95-4.95-4.95-4.95L7.05 5.636z" />
                        </svg>
                    </button></a>
            </header>
            <section class="modal-container-body rtf">
                <div class="table-data">
                    <div class="order">
                        <div class="head">
                            <i class='bx bx-search'></i>
                            <i class='bx bx-filter'></i>
                        </div>
                        {{-- <h3>Ini Detail Dari : {{ $detail->nama_barang }} </h3> --}}
                        <table>
                            <thead>
                                <tr>
                                    {{-- <th>No</th> --}}
                                    <th>Judul</th>
                                    <th>Penulis</th>
                                    <th>Penerbit</th>
                                    <th>Tahun Terbit</th>
                                    <th>Sinopsis</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    {{-- <td>{{$detail->id}}</td> --}}
                                    <td>{{ $detail->judul }}</td>
                                    <td>{{ $detail->penulis }}</td>
                                    <td>{{ $detail->penerbit }}</td>
                                    <td>{{ $detail->tahun_terbit }}</td>
                                    <td>{{ $detail->sinopsis }}</td>
                                </tr>
                            </tbody>
                        </table>
                        <br>
                        <hr style="color:black ; height: 2px;">
                        <br>
                        <table>
                            <thead>
                                <tr>
                                    {{-- <th>No</th> --}}
                                    <th>Kode Kategori</th>
                                    <th>Nama Kategori</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    @csrf
                                    <?php $no = 1; ?>
                                    @foreach ($relasi as $list)
                                        <td>{{ $list->kode_kate }}</td>
                                        <td>{{ $list->nama_kate }}</td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </section>
            <!-- -->
            <footer class="modal-container-footer">
                <a href="/pustaka"><button class="button is-primary">Keluar</button></a>
                </form>
            </footer>
        </article>
    </div>
@endsection
