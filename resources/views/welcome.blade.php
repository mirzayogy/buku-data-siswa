<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Siswa</title>
    <link rel="stylesheet" href="{{ asset('bootstrap/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{ asset('css/style.css')}}">
</head>
<body>
    <div class="container">
        @yield('main')
    </div>

    @yield('footer')

    <script src="{{ asset('jquery/jquery-3.5.1.min.js')}}"></script>
    <script src="{{ asset('bootstrap/js/bundle.min.js')}}"></script>
</body>
</html>