<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Simple Sidebar - Start Bootstrap Template</title>
        <!-- Favicon-->
        <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="<?php echo asset ('css/styles.css');?>" rel="stylesheet" />
        <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
        
    </head>
    <body>
        <div class="d-flex" id="wrapper">
            <!-- Sidebar-->
            <div class="bg-light border-right" id="sidebar-wrapper">
                <div class="sidebar-heading">Start Bootstrap</div>
                <div class="list-group list-group-flush">
                    <a class="list-group-item list-group-item-action bg-light" href="{{url('/home')}}">Masukan Nama pasien</a>
                    <a class="list-group-item list-group-item-action bg-light" href="{{url('/antrian')}}">Lihat Antrian</a>
                    <a class="list-group-item list-group-item-action bg-light" href="{{url('/daftarpasien')}}">Lihat Data</a>
                    <a class="list-group-item list-group-item-action bg-light" href="{{url('/reservasi_pasien')}}">reservasi</a>
                    <a class="list-group-item list-group-item-action bg-light" href="{{url('/kunjungan')}}">Kunjungan</a>
                    <a class="list-group-item list-group-item-action bg-light" href="{{url('/dokter')}}">Dokter</a>
                    <a class="list-group-item list-group-item-action bg-light" href="{{url('/perawat')}}">Perawat</a>
                    <a class="list-group-item list-group-item-action bg-light" href="{{url('/kunjungan_poli')}}">Kunjungan Poli</a>
                </div>
                
            </div>
            <!-- Page Content-->
            <div id="page-content-wrapper">
                <nav class="navbar navbar-expand-lg navbar-light bg-light border-bottom">
                    <button class="btn btn-primary" id="menu-toggle">Toggle Menu</button>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav ml-auto mt-2 mt-lg-0">
                            <li class="nav-item active">
                                <a class="nav-link" href="#!">
                                    Home
                                    <span class="sr-only">(current)</span>
                                </a>
                            </li>
                            <li class="nav-item"><a class="nav-link" href="#!">Link</a></li>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" id="navbarDropdown" href="#!" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">{{Auth::user()->name}}</a>
                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        </ul>
                    </div>
                </nav>
                @yield("content")
                
            </div>
        </div>
        <!-- Bootstrap core JS-->
        <script type="text/javascript" language="javascript" src="https://code.jquery.com/jquery-3.3.1.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src="<?php echo asset('js/scripts.js') ;?>"></script>
    </body>
</html>
