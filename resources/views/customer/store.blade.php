<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title> Library - Login</title>
    <link rel="stylesheet" href="{{ asset('css/customer.css') }}">
    {{-- Complements --}}
    <link rel="stylesheet" href="{{ asset('css/cloudstore.css') }}">
    <link rel="stylesheet" href="{{ asset('fontawesome/font-awesome.css') }}">
    <link rel="stylesheet" href="{{ asset('fontawesome/font.css') }}">
    <link rel="stylesheet" href="{{ asset('boxicons/box.css') }}">
    <link rel="stylesheet" href="{{ asset('sweetalert2/sweetalert2.min.css') }}">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        .swal2-popup {
            font-size: 1.2rem !important;
        }
    </style>
</head>
<body>
    <div class="container" id="container">
        <div class="form-container sign-up">
            <form action="registrasi-simpan" method="post">
                @csrf
                <h1>Create Account</h1>
                <div class="social-icons">
                    <a href="#" class="icon"><i class='bx bxl-google-plus'></i></a>
                    <a href="#" class="icon"><i class='bx bxl-facebook'></i></a>
                    <a href="#" class="icon"><i class='bx bxl-github' ></i></a>
                    <a href="#" class="icon"><i class='bx bxl-linkedin' ></i></a>
                </div>
                <span>or use your email for registeration</span>
                <input type="text" name="emaill" id="emaill" placeholder="Name">
                <input type="email" name="user" placeholder="Email">
                <input type="password" name="password" placeholder="Password">
                <button>Sign Up</button>
            </form>
        </div>
        <div class="form-container sign-in">
            <form action="login-simpan" method="post">
                @csrf
                <h1>My Library</h1>
                <div class="social-icons">
                    <a href="#" class="icon"><i class='bx bxl-google-plus'></i></a>
                    <a href="#" class="icon"><i class='bx bxl-facebook'></i></a>
                    <a href="#" class="icon"><i class='bx bxl-github' ></i></a>
                    <a href="#" class="icon"><i class='bx bxl-linkedin' ></i></a>
                </div>
                <span>sign in with your email & password</span>
                <input type="text" name="email" id="email" placeholder="Email">
                <input type="password" name="password" id="password" placeholder="Password">
                <a href="#">Forget Your Password?</a>
                <button>Sign In</button>
            </form>
        </div>
        <div class="toggle-container">
            <div class="toggle">
                <div class="toggle-panel toggle-left">
                    <h1>Hello Members!</h1>
                    <p>Register with your personal details to use all of site features My Library</p>
                    <button class="hidden" id="login">Sign In</button>
                </div>
                <div class="toggle-panel toggle-right">
                    <h1>Welcome Back!</h1>
                    <p>Enter your personal details to completed your Knowledge Needs</p>
                    <button class="hidden" id="register">Sign Up</button>
                </div>
            </div>
        </div>
    </div>

    <script src="{{ asset('js/customer.js') }}"></script>
    <script src="{{ asset('sweetalert2/sweetalert2.min.js') }}"></script>
    @include('sweetalert::alert')
</body>

</html>
