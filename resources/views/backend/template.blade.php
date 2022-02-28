<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="{{ asset('bootstrap/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('datatables/css/dataTables.bootstrap4.min.css') }}">
    <link rel="stylesheet" href="{{ asset('fontawesome5/css/all.css') }}">
    <link rel="stylesheet" href="{{ asset('css/backend.css') }}">
</head>

<body class="bg-light">
    <div class="wrapper d-flex">
        <div class="sidebar">
            <div class="judul text-center">Panel PPDB</div>
            <div class="profil d-flex">
                <div class="img">
                    <img src="{{ asset('images/default-profile.jpg') }}" alt="" width="60"
                        class="img-fluid rounded-circle">
                </div>
                <div class="img-text">
                    <h6>{{ session('name') }}</h6>
                    <p><small class=""><span class="fa fa-circle text-success"></span> online</small></p>
                </div>
            </div>
            <ul>
                @if (session('level') == 1)
                    <li><a href="/dashboard"><i class="fa fa-home"></i> Dashboard</a></li>
                    <li><a href="/biodata"><i class="fa fa-clipboard"></i> Biodata</a></li>
                    <li><a href="/raport"><i class="fa fa-star"></i> Nilai Raport</a></li>
                    <li>
                        <a class="btn-master" href="#"><i class="fa fa-user"></i> Master <span
                                class="fa fa-caret-down"></span></a>
                        <ul class="menu-master">
                            <li><a href="/dataPPDB">Data PPDB</a></li>
                            <li><a href="/dataRaport">Raport</a></li>
                            <li><a href="/dataJurusan">jurusan</a></li>
                            <li><a href="/dataKTM">Keterangan TM</a></li>
                        </ul>
                    </li>
                    <li>
                        <a class="btn-laporan" href="#"><i class="fa fa-flag"></i> Laporan <span
                                class="fa fa-caret-down"></span></a>
                        <ul class="menu-laporan">
                            <li><a href="{{ route('laporanPeserta') }}">Laporan Peserta</a></li>
                        </ul>
                    </li>
                @elseif(session('level') == 2)
                    <li><a href="/dashboard">Dashboard</a></li>
                    <li><a href="/biodata">Biodata</a></li>
                    <li><a href="/raport">Nilai Raport</a></li>
                @endif

            </ul>
        </div>
        <div class="content">
            <nav class="navbar navbar-expand-lg navbar-light bg-white rounded shadow">
                <div class="container">
                    <a href="" class="navbar-brand"><span class="fa fa-bars"></span></a>
                    <button class="navbar-toggler" data-toggle="collapse" data-terget="#navmenu">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navmenu">
                        <ul class="navbar-nav ml-auto">
                            <li class="navbar-item">
                                <a href="{{ route('logout') }}" class="nav-link text-danger">Logout</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>

            <div class="container mt-3">
                @yield('content')
            </div>
        </div>
    </div>

    <script src="{{ asset('bootstrap/js/jquery-3.5.1.slim.min.js') }}"></script>
    <script src="{{ asset('bootstrap/js/bootstrap.bundle.js') }}"></script>
    <script src="{{ asset('datatables/js/jquery-3.5.1.js') }}"></script>
    <script src="{{ asset('datatables/js/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('datatables/js/dataTables.bootstrap4.min.js') }}"></script>
    <script>
        $('.btn-master').click(function() {
            $('.menu-master').toggleClass('show');
        });
        $('.btn-laporan').click(function() {
            $('.menu-laporan').toggleClass('show');
        });

        $(document).ready(function() {
            $('#dataTable').DataTable();
        });

    </script>
</body>

</html>
