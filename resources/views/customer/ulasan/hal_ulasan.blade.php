<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('bootstrap/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/ulasann.css') }}">
    <link rel="stylesheet" href="{{ asset('css/font-awesome.css') }}">
    <link rel="stylesheet" href="{{ asset('fontawesome/font.css') }}">
    <link rel="stylesheet" href="{{ asset('sweetalert2/sweetalert2.min.css') }}">
    <title>Library - Website</title>
</head>

<body>
    <div class="container d-flex justify-content-center mt-100 mb-100">
        <div class="row">
            <div class="col-md-12">

                <div class="card">
                    <div class="card-body" style="width: 1000px;">
                        <a href="/hal_detail/{{ $buku->id }}"><button class="icon-button" style="float: right;">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24"
                                    height="24">
                                    <path fill="none" d="M0 0h24v24H0z" />
                                    <path fill="currentColor"
                                        d="M12 10.586l4.95-4.95 1.414 1.414-4.95 4.95 4.95 4.95-1.414 1.414-4.95-4.95-4.95 4.95-1.414-1.414 4.95-4.95-4.95-4.95L7.05 5.636z" />
                                </svg>
                            </button></a>
                        <h4 class="card-title">Ulasan Terbaru</h4>
                        <h6 class="card-subtitle">Ulasan untuk Pustaka dengan Judul {{ $buku->judul }}</h6>
                    </div>
                    @csrf
                    @foreach ($ulasan as $list)
                        <div class="comment-widgets m-b-20">
                            <div class="d-flex flex-row comment-row">
                                <div class="p-2"><span class="round">
                                        <img src="/img/istockphoto-1495088043-612x612.jpg" alt="user"
                                            width="60"></span></div>
                                <div class="comment-text w-100">
                                    <h5>{{ $list->nama_lengkap }}</h5>
                                    <div class="comment-footer">
                                        <span class="date">{{ $list->tanggal }}</span>
                                        <span class="label label-success"
                                            style="margin-left: 5px; ">{{ $list->rating }}<i class="fa fa-star"
                                                style="margin-left: 4px;"></i></span> <span class="action-icons">
                                            <a href="" data-abc="true"><i class="fa fa-heart"
                                                    style="margin-left: 7px;"></i></a>
                                        </span>
                                    </div>
                                    <p class="m-b-5 m-t-10">{{ $list->ulasan }}</p>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>

            </div>
        </div>
    </div>
    {{-- partial --}}
    <script src="{{ asset('bootstrap/bootstrap.min.js') }}"></script>
    <script src="{{ asset('js/fontawesome.js') }}"></script>
    <script src="{{ asset('js/jquery.min.js') }}"></script>
    <script src="{{ asset('js/script.js') }}"></script>
    <script src="{{ asset('sweetalert2/sweetalert2.min.js') }}"></script>
    @include('sweetalert::alert')
</body>

</html>
