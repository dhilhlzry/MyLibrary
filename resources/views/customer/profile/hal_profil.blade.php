<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Library - Website</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('bootstrap/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/profill.css') }}">
    {{-- Complements --}}
    <link rel="stylesheet" href="{{ asset('fontawesome/font-awesome.css') }}">
    <link rel="stylesheet" href="{{ asset('fontawesome/font.css') }}">
    <link rel="stylesheet" href="{{ asset('sweetalert2/sweetalert2.min.css') }}">
    <title>Library - Website</title>
    <style>
        .swal2-popup {
            font-size: 1.2rem !important;
        }
    </style>
</head>

<body id="home">
    <!-- navbar openned -->
    <nav class="navbar navbar-expand-lg navbar-dark shadow-sm sticky-top" style="background-color: #3C91E6;;">
        <div class="container">
            <a class="navbar-brand" style="font-family:'Lato', sans-serif;" href="#">My Profile</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup"
                aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <div class="navbar-nav ms-auto">
                    <a class="nav-link" style="color: white;" style="font-family:'Lato', sans-serif;"
                        href="#">Home</a>
                    <a class="nav-link" style="color: white;" style="font-family:'Lato', sans-serif;"
                        href="#contact">About</a>
                    <a class="nav-link" style="color: red;" style="font-family:'Lato', sans-serif;"
                        href="/hal_utama">Keluar</a>
                </div>
            </div>
        </div>
    </nav>
    <!-- navbar ended -->
    <!-- jumbotron+ -->
    <section class="jumbotron text-center">
        <img src="img/profile_image.png" alt="images" width="200" class="rounded-circle img-thumbnail" />
        <h1 class="display-4">{{ Auth::guard('anggota')->user()->nama_lengkap}}</h1>
        <p class="lead">Programing | Workout and Gaming</p>
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
            <path fill="#ffffff" fill-opacity="1"
                d="M0,96L48,106.7C96,117,192,139,288,122.7C384,107,480,53,576,37.3C672,21,768,43,864,64C960,85,1056,107,1152,138.7C1248,171,1344,213,1392,234.7L1440,256L1440,320L1392,320C1344,320,1248,320,1152,320C1056,320,960,320,864,320C768,320,672,320,576,320C480,320,384,320,288,320C192,320,96,320,48,320L0,320Z">
            </path>
        </svg>
    </section>
    <!-- jumbotron- -->
    <!-- contact -->
    <section id="contact">
        <div class="container">
            <div class="row text-center mb-3">
                <div class="col">
                    <h2>About Me</h2>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-md-6">
                    <div class="mb-3">
                        <label for="name" class="form-label">Nama Lengkap</label>
                        <input type="text" class="form-control" id="name" value="{{ Auth::guard('anggota')->user()->nama_lengkap}}" disabled>
                    </div>
                    <div class="mb-3">
                        <label for="email" class="form-label">Email</label>
                        <input type="text" class="form-control" id="email" value="{{ Auth::guard('anggota')->user()->email}}" disabled>
                    </div>
                    <div class="mb-3">
                        <label for="pesan" class="form-label">Alamat</label>
                        <textarea class="form-control" id="pesan" rows="3" disabled> {{ Auth::guard('anggota')->user()->alamat}} </textarea>
                    </div>
                    <div class="mb-3">
                        <label for="email" class="form-label">Jenis Kelamin</label>
                        <input type="text" class="form-control" id="email" value="{{ Auth::guard('anggota')->user()->jenis_kel}}" disabled>
                    </div>
                    <a href="/edit_profil/{{ Auth::guard('anggota')->user()->id}}"><button class="btn btn-primary" type="submit" name="simpan"
                            value="Simpan">Ubah Profil</button></a>
                </div>
            </div>
        </div>
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
            <path fill="#0d6efd" fill-opacity="1"
                d="M0,224L48,218.7C96,213,192,203,288,202.7C384,203,480,213,576,208C672,203,768,181,864,170.7C960,160,1056,160,1152,186.7C1248,213,1344,267,1392,293.3L1440,320L1440,320L1392,320C1344,320,1248,320,1152,320C1056,320,960,320,864,320C768,320,672,320,576,320C480,320,384,320,288,320C192,320,96,320,48,320L0,320Z">
            </path>
        </svg>
    </section>
    <script src="{{ asset('bootstrap/bootstrap.min.js') }}"></script>
    <script src="{{ asset('js/fontawesome.js') }}"></script>
    <script src="{{ asset('js/jquery.min.js') }}"></script>
    <script src="{{ asset('js/script.js') }}"></script>
    <script src="{{ asset('sweetalert2/sweetalert2.min.js') }}"></script>
    @include('sweetalert::alert')
</body>

</html>
