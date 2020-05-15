<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Siswa</title>
    <link rel="stylesheet" href="{{ asset('bootstrap/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="stylesheet" href="{{ asset('css/style.css')}}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body>
    @include('navbar')
    <div class="wrapper d-flex">
        <div class="sideMenu bg-mattBlackLight">
            @include('sidebar')
        </div>
        <div class="content">
            <main>
                <div class="container-fluid">
                    @yield('main')
                </div>
            </main>
        </div>
        </div>


        @yield('footer')

        <script src="{{ asset('jquery/jquery-3.5.1.min.js')}}"></script>
        <script src="{{ asset('bootstrap/js/bootstrap.bundle.min.js')}}"></script>
        <script src="{{ asset('jquery/jquery.slimscroll.min.js')}}"></script>
</body>

</html>