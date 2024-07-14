<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="{{ asset('css/login.css') }}">
    <link rel="stylesheet" href="{{ asset('css/font-awesome.css') }}">
    <link rel="stylesheet" href="{{ asset('boxicons/box.css') }}">
    <link rel="stylesheet" href="{{ asset('sweetalert2/sweetalert2.min.css') }}">
    <style>
        .swal2-popup {
            font-size: 1.2rem !important;
        }
    </style>
	<title>Library - Login</title>
</head>

<body>


	<div class="container">
		<div class="forms-container">
			<div class="signin-signup">
				<form action="" class="sign-in-form" method="POST">
                        @csrf
					<h2 class="title">LOGIN LIBRARY</h2>
					<div class="input-field">
					<i class="bx bxs-group"></i>
						<input type="email" placeholder="Username" name="email" id="email" required />
					</div>


					<div class="input-field">
					<i class="bx bxs-lock"></i>
						<input type="password" class="" placeholder="Password" name="password" id="password" onchange="checkPassword()" required="" />
						<i id="pass-statuss" class="bx bxs-show" aria-hidden="true" onclick="viewpasswordd()" style="font-size: 21px ;float: right; color: grey; margin-top: -55px; margin-left: 325px;"></i>
					</div>
					<input type="submit" value="Masuk" class="btn solid" name="login" id="login" required />


					<p class="social-text">Support by:</p>
					<div class="social-media">
						<a href="#" class="image">
							<img src="img/pilot-85039812.jpg">
						</a>

					</div>
				</form>

			</div>
		</div>
	</div>

    <script src="{{ asset('js/fontawesome.js') }}"></script>
    <script src="{{ asset('js/jquery.min.js') }}"></script>
    <script src="{{ asset('js/script.js') }}"></script>
    <script src="{{ asset('sweetalert2/sweetalert2.min.js') }}"></script>
    @include('sweetalert::alert')
	<script>
        // <?php
        // if (isset($_GET['pesan'])) {
        //     $pesan = $_GET['pesan'];
        // }
        // if ($pesan == "salah") {
        // ?>
        //     Swal.fire({
        //         title: "Username / Password Salah",
        //         icon: "warning",
        //         confirmButtonColor: "#3085d6",
        //         confirmButtonText: "Ok"
        //     }).then((result) => {
        //         if (result.isConfirmed) {
        //         }
        //     });

        // <?php
        // }
        // ?>
    </script>
</body>
</html>
