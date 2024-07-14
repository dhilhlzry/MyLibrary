<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Library - Website</title>
    <link rel="stylesheet" href="{{ asset('css/dett.css') }}">
    <link rel="stylesheet" href="{{ asset('css/input.css') }}">
    <link rel="stylesheet" href="{{ asset('css/font-awesome.css') }}">
    <link rel="stylesheet" href="{{ asset('boxicons/box.css') }}">
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
                    Rating & Ulasan
                </h1>
                <a href="/detail_riwayat/{{ $detail->id }}"><button class="icon-button">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24">
                            <path fill="none" d="M0 0h24v24H0z" />
                            <path fill="currentColor"
                                d="M12 10.586l4.95-4.95 1.414 1.414-4.95 4.95 4.95 4.95-1.414 1.414-4.95-4.95-4.95 4.95-1.414-1.414 4.95-4.95-4.95-4.95L7.05 5.636z" />
                        </svg>
                    </button></a>
            </header>
            <section class="modal-container-body rtf">

                <form action="/simpan-ulasan/{{ $detail->id }}" method="post">
                    @csrf
                    <div class="stok">
                        <label for="judul" class="des2">Rating</label>
                        <div class="">
                            <select name="rating" id="rating" class="des1" required>
                                <option value="5" selected>5</option>
                                <option value="4">4</option>
                                <option value="3">3</option>
                                <option value="2">2</option>
                                <option value="1">1</option>
                            </select>
                        </div>
                    </div>
                    <br>
                    <div class="des">
                        <label for="judul" class="des2">Ulasan Anda</label>
                        <div class="">
                            <input type="text" class="des1" placeholder="Masukan Ulasan" value=""
                                name="ulasan">
                        </div>
                    </div>
            </section>
            <footer class="modal-container-footer">
                <button class="button is-primary" type="submit" name="simpan" value="Simpan">Submit</button>
            </footer>
            </form>
        </article>
    </div>
    <!-- partial -->
    <script src="{{ asset('js/fontawesome.js') }}"></script>
    <script src="{{ asset('js/jquery.min.js') }}"></script>
    <script src="{{ asset('js/script.js') }}"></script>
    <script src="{{ asset('sweetalert2/sweetalert2.min.js') }}"></script>

</body>

</html>