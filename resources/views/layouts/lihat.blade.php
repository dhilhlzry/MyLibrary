<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Library - Website</title>
    <link rel="stylesheet" href="{{ asset('bootstrap/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/detaill.css') }}">
    <link rel="stylesheet" href="{{ asset('sweetalert2/sweetalert2.min.css') }}">
</head>

<body>
    <!-- MAIN -->

    @yield('content')

    <!-- MAIN -->
    <script src="{{ asset('bootstrap/bootstrap.min.js') }}"></script>
    <script src="{{ asset('js/jquery.min.js') }}"></script>
    <script src="{{ asset('js/script.js') }}"></script>
</body>

</html>
