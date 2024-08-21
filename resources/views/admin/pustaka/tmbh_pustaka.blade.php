@extends('layouts.input')

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
                    Input Pustaka
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
                <form action="pustaka-simpan" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="nama">
                        <label for="judul" class="nama2">Judul</label>
                        <div class="">
                            <input type="text" name="judul" id="judul" placeholder="Masukan Judul" class="nama1"
                                required autofocus>
                        </div>
                    </div>
                    <div class="hargabeli">
                        <label for="judul" class="hargabeli2">Penulis</label>
                        <div class="">
                            <input type="text" name="penulis" id="penulis" placeholder="Masukan Penulis"
                                class="hargabeli1" required>
                        </div>
                    </div>
                    <div class="hargabeli">
                        <label for="judul" class="hargabeli2">Penerbit</label>
                        <div class="">
                            <input type="text" name="penerbit" id="penerbit" placeholder="Masukan Penerbit"
                                class="hargabeli1" required>
                        </div>
                    </div>
                    <div class="hargabeli">
                        <label for="judul" class="hargabeli2">Tahun Terbit</label>
                        <div class="">
                            <input type="text" name="tahun_terbit" id="tahun_terbit" placeholder="Masukan Tahun Terbit"
                                class="hargabeli1" required>
                        </div>
                    </div>
                    <div class="hargajual">
                        <label for="judul" class="hargajual2">Image</label>
                        <div class="">
                            <input type="file" id="image" name="foto" accept="image/*">
                            <img id="preview" src="#" alt="Current Image"
                                style="width:350px;height: 450px;display:none; margin-top:10px;">
                        </div>
                    </div>
                    <div class="hargajual">
                        <label for="judul" class="hargajual2">Sinopsis</label>
                        <div class="">
                            <input type="text" name="sinopsis" id="sinopsis" placeholder="Masukan Sinopsis"
                                class="hargajual1" required>
                        </div>
                    </div>
                    <div class="stok">
                        <label for="judul" class="des2">Kategori</label>
                        <div class="">
                            <select multiple="multiple" name="kategori[]" id="kategori" class="des1"
                                style="height: auto;" required>
                                @foreach ($kategori as $list)
                                    <option style="padding: 6px 6px" value="{{ $list->id }}">{{ $list->nama_kate }}
                                    </option>
                                @endforeach
                            </select>
                        </div>
                    </div>
            </section>
            <footer class="modal-container-footer">
                <button class="button is-primary" type="submit" value="Simpan">Submit</button>
                </form>
            </footer>
        </article>
    </div>
    <script>
        document.getElementById('image').addEventListener('change', function() {
            var reader = new FileReader();
            reader.onload = function(e) {
                document.getElementById('preview').src = e.target.result;
                document.getElementById('preview').style.display = 'block';
            };
            reader.readAsDataURL(this.files[0]);
        });
    </script>
@endsection
