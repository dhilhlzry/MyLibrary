@extends('layouts.lihat')

@section('content')
    <div class="modal">
        <article class="modal-container">
            <header class="modal-container-header">
                <h1 class="modal-container-title1" style="padding-top: 8px">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24" aria-hidden="true">
                        <path fill="none" d="M0 0h24v24H0z" />
                        <path fill="currentColor" d="M14 9V4H5v16h6.056c.328.417.724.785 1.18 1.085l1.39.915H3.993A.993.993 0 0 1 3 21.008V2.992C3 2.455 3.449 2 4.002 2h10.995L21 8v1h-7zm-2 2h9v5.949c0 .99-.501 1.916-1.336 2.465L16.5 21.498l-3.164-2.084A2.953 2.953 0 0 1 12 16.95V11zm2 5.949c0 .316.162.614.436.795l2.064 1.36 2.064-1.36a.954.954 0 0 0 .436-.795V13h-5v3.949z" />
                    </svg>
                    Detail Pustaka
                </h1>
                <a href="/hal_utama"><button class="icon-button">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24">
                            <path fill="none" d="M0 0h24v24H0z" />
                            <path fill="currentColor" d="M12 10.586l4.95-4.95 1.414 1.414-4.95 4.95 4.95 4.95-1.414 1.414-4.95-4.95-4.95 4.95-1.414-1.414 4.95-4.95-4.95-4.95L7.05 5.636z" />
                        </svg>
                    </button></a>
            </header>
            <section class="modal-container-body rtf">
                <form action="" method="post">
                    {{-- @csrf
                    @method('PUT') --}}
                    <div class="container-fluid py-1">
                        <div class="container">
                            <div class="row">
                                <div class="col-md-4" style="height: 27rem;">
                                    <img src="/storage/{{$detail->foto}}" class="w-100" style="height: 100%; object-fit: cover; object-position: center;" alt="">
                                </div>
                                <div class="col-md-6 offset-md-1">
                                    <h2 name="nama" style="font-size: 35px; font-family: 'Times New Roman', Times, serif;">{{$detail->judul}}</h2>
                                    <p class="mt-2">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Cumque quasi perspiciatis minus. Distinctio in eligendi et a, quo velit ut! {{$detail->sinopsis}}</p>
                                    <p class="mt-2" style="font-size: 23px;color: #CA965C;font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif; margin-bottom: 1px">Penulis : {{$detail->penulis}}</p>
                                    <p class="mt-2" style="font-size: 23px;color: #CA965C;font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif; margin-bottom: 1px">Penerbit : {{$detail->penerbit}}</p>
                                    <p class="mt-2" style="font-size: 23px;color: #CA965C;font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif; margin-bottom: 1px">Tahun Terbit : {{$detail->tahun_terbit}}</p>
                                    <p class="mt-2" style="font-size: 23px;color: #CA965C;font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif; margin-bottom: 1px">Rating : @if ($ulasan == null)
                                        Belum ada Rating
                                    @endif
                                    @if ($ulasan != null)
                                            {{ $ulasan }} /5
                                        @endif </p>
                                </div>
                            </div>
                        </div>
                    </div>
            </section>
            <footer class="modal-container-footer">
                <a href="/pinjam/{{ $detail->id }}" class="button is-success" style="text-decoration: none;">Pinjam Pustaka</a>
                <a href="/koleksi/{{ $detail->id }}" class="button is-primary" style="text-decoration: none;">Tambah Koleksi</a>
                <a href="/hal_ulasan/{{ $detail->id }}" class="button is-danger" style="text-decoration: none;">Lihat Ulasan</a>
                {{-- <form action="/koleksi/{{ $detail->id }}" method="post">
                    @csrf
                    @method('PUT')
                    <button type="submit" class="button is-primary">Tambah koleksi</button>
                </form> --}}
                </form>
            </footer>
        </article>
    </div>
@endsection

