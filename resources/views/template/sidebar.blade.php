<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ __('Klinik Amanda Jakarta Selatan') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}"></script>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@500&display=swap" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <style>
        * {
            font-family: 'Poppins';
        }

        #wrapper {
            align-items: stretch;
        }

        #sidebar {
            position: fixed;
            width: 240px;
            height: 100%;
            z-index: 1;
            overflow-y: scroll; 
        }

        #sidebar::-webkit-scrollbar {
            display: none;
        }

        #content {
            margin-left: 200px;
        }
    </style>
</head>

<body>
    <div class="d-flex" id="wrapper">
        <!-- Sidebar-->
        <div class="bg-light border-right" id="sidebar">
            <div class="sidebar-header text-center pt-3 h3">
                <a class="text-dark m-0" href="{{ url('/') }}">
                    {{ __('Klinik Amanda') }}
                </a>
            </div>
            <div class="list-group list-group-flush">
                <?php $user = Auth::user(); ?>
                <?php if ($user->hasRole('admin')) { ?>
                    <a class="list-group-item list-group-item-action bg-light" href="{{url('/daftarpasien')}}">Data Pasien</a>
                    <a class="list-group-item list-group-item-action bg-light" href="{{url('/antrian')}}">Daftar Antrian</a>
                    <a class="list-group-item list-group-item-action bg-light" href="{{url('/tambahdata_admin')}}">Tambah Data Pasien</a>
                    <a class="list-group-item list-group-item-action bg-light" href="{{url('/reservasi_admin')}}">Tambah Reservasi</a>
                    <a class="list-group-item list-group-item-action bg-light" href="{{url('/daftar_kunjungan')}}">Daftar Kunjungan</a>
                    <?php if ($user->hasRole('kasir')) { ?>
                        <a class="list-group-item list-group-item-action bg-light" href="{{url('/antrian')}}">Lihat Antrian</a>
                        <a class="list-group-item list-group-item-action bg-light" href="{{url('/daftarpasien')}}">Lihat Data</a>
                        <a class="list-group-item list-group-item-action bg-light" href="{{url('/kunjungan')}}">Kunjungan</a>
                        <a class="list-group-item list-group-item-action bg-light" href="{{url('/kunjungan_poli')}}">Kunjungan Poli</a>
                        <a class="list-group-item list-group-item-action bg-light" href="{{url('/bhp')}}">BHP</a>
                        <a class="list-group-item list-group-item-action bg-light" href="{{url('/obat')}}">Obat</a>
                        <a class="list-group-item list-group-item-action bg-light" href="{{url('/ref_obat')}}">Referensi Obat</a>
                        <a class="list-group-item list-group-item-action bg-light" href="{{url('/ref_penyakit_icd')}}">Referensi Penyakit ICD</a>
                        <a class="list-group-item list-group-item-action bg-light" href="{{url('/ref_bhp')}}">Refrensi BHP</a>
                    <?php  } ?>
                    <a class="list-group-item list-group-item-action bg-light" href="{{url('/dokter')}}">Dokter</a>
                    <a class="list-group-item list-group-item-action bg-light" href="{{route('perawat')}}">Perawat</a>
                    <a class="list-group-item list-group-item-action bg-light" href="{{route('ref_poli_bagian')}}">Referensi Poli Bagian</a>
                    <?php if ($user->hasRole('admin_poli')) { ?>
                        <a class="list-group-item list-group-item-action bg-light" href="{{route('tindakan')}}">Tindakan</a>
                        <a class="list-group-item list-group-item-action bg-light" href="{{route('ref_tindakan')}}">Referensi Tindakan</a>
                    <?php  } ?>
                <?php } else if ($user->hasRole('admin_poli')) { ?>
                    <a class="list-group-item list-group-item-action bg-light" href="{{url('/tindakan')}}">Tindakan</a>
                    <a class="list-group-item list-group-item-action bg-light" href="{{url('/ref_tindakan')}}">Referensi Tindakan</a>
                    <a class="list-group-item list-group-item-action bg-light" href="{{url('/daftar_kunjungan')}}">Daftar Kunjungan</a>
                    <a class="list-group-item list-group-item-action bg-light" href="{{url('/daftar_kunjunganpoli')}}">daftar kunjungan poli</a>
                <?php } else if ($user->hasRole('kasir')) { ?>
                    <a class="list-group-item list-group-item-action bg-light" href="{{url('/antrian')}}">Lihat Antrian</a>
                    <a class="list-group-item list-group-item-action bg-light" href="{{url('/daftarpasien')}}">Lihat Data</a>
                    <a class="list-group-item list-group-item-action bg-light" href="{{url('/kunjungan')}}">Kunjungan</a>
                    <a class="list-group-item list-group-item-action bg-light" href="{{url('/kunjungan_poli')}}">Kunjungan Poli</a>
                    <a class="list-group-item list-group-item-action bg-light" href="{{url('/bhp')}}">BHP</a>
                    <a class="list-group-item list-group-item-action bg-light" href="{{url('/obat')}}">Obat</a>
                    <a class="list-group-item list-group-item-action bg-light" href="{{url('/ref_obat')}}">Referensi Obat</a>
                    <a class="list-group-item list-group-item-action bg-light" href="{{url('/ref_penyakit_icd')}}">Referensi Penyakit ICD</a>
                    <a class="list-group-item list-group-item-action bg-light" href="{{url('/ref_bhp')}}">Refrensi BHP</a>
                <?php } else if ($user->hasRole('user')) { ?>
                    <a class="list-group-item list-group-item-action bg-light m-0" href="{{url('/home')}}">Home</a>
                    <a class="list-group-item list-group-item-action bg-light" href="{{url('/daftarpasien')}}">Data Diri</a>
                    <a class="list-group-item list-group-item-action bg-light" href="{{url('/reservasi_pasien')}}">Reservasi</a>
                    <a class="list-group-item list-group-item-action bg-light" href="{{url('/antrian')}}">Lihat Antrian</a>
                <?php  } ?>
            </div>
        </div>
        <!-- Page Content-->
        <div class="flex-fill" id="content">
            <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
                <div class="container">
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <!-- Left Side Of Navbar -->
                        <ul class="navbar-nav mr-auto">

                        </ul>

                        <!-- Right Side Of Navbar -->
                        <ul class="navbar-nav ml-auto">
                            <!-- Authentication Links -->
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }}
                                </a>
                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
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
                </div>
            </nav>

            <main class="py-4">
                @yield('content')
            </main>
        </div>
    </div>
</body>

</html>