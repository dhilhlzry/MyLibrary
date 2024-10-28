<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Library - Website</title>
    <link rel="stylesheet" href="{{ asset('css/dett.css') }}">
    <link rel="stylesheet" href="{{ asset('css/input.css') }}">
    {{-- Complements --}}
    <link rel="stylesheet" href="{{ asset('fontawesome/font-awesome.css') }}">
    <link rel="stylesheet" href="{{ asset('boxicons/box.css') }}">

<body>
    <main>
        @yield('content')
    </main>
    <!-- partial -->
    <script src="{{ asset('js/fontawesome.js') }}"></script>
    <script src="{{ asset('js/jquery.min.js') }}"></script>
    <script src="{{ asset('js/script.js') }}"></script>
    <script src="{{ asset('sweetalert2/sweetalert2.min.js') }}"></script>
</body>

</html>
