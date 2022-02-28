<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="{{ asset('bootstrap/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('fontawesome5/css/all.css') }}">
</head>

<body class="bg-light">
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary rounded">
        <div class="container">
            <a href="" class="navbar-brand font-weight-bold">PPDB <small>SMKN 2 Bangkalan</small></a>
            <button class="navbar-toggler" data-toggle="collapse" data-terget="#navmenu">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navmenu">
                <ul class="navbar-nav ml-auto">
                    <li class="navbar-item">
                        <a href="/login" class="nav-link @if (Request::is('login')) text-white @endif">Login</a>
                    </li>
                    <li class="navbar-item">
                        <a href="/register" class="nav-link @if (Request::is('register')) text-white @endif">Register</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="container mt-3">
        @yield('content')
    </div>
    <script src="{{ asset('bootstrap/js/jquery-3.5.1.slim.min.js') }}"></script>
    <script src="{{ asset('bootstrap/js/bootstrap.bundle.js') }}"></script>
</body>

</html>
