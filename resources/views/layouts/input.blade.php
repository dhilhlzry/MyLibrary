<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Library - Website</title>
    <link rel="stylesheet" href="{{asset('css/cloud.css')}}">
    <link rel="stylesheet" href="{{asset('css/modall.css')}}">
    <link rel="stylesheet" href="{{asset('css/font-awesome.css')}}">
	<link rel="stylesheet" href="{{asset('boxicons/box.css')}}">
</head>
<body>
    <main>
        @yield('content')
    </main>
    <!-- partial -->
    <script src="{{asset('js/fontawesome.js')}}"></script>
	<script src="{{asset('js/jquery.min.js')}}"></script>
    <script src="{{asset('js/script.js')}}"></script>
	<script src="{{asset('sweetalert2/sweetalert2.min.js')}}"></script>
</body>
</html>
        