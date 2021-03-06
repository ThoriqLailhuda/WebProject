

<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ __('Klinik Amanda Jakarta Selatan') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@500&display=swap" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <style>
        * {
            font-family: 'Poppins';
        }
        .xyz{
            
            text-align: center;
        }
        img{
            width: 45%;
            border-radius: 10px;
        }
        body{
        
        }
    </style>
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
                    {{ __('Klinik Amanda') }}
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">

                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
                        @guest
                            @if (Route::has('login'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                                </li>
                            @endif

                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                            <!-- @if (Route::has('contact'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('contact') }}">{{ __('Contact Us') }}</a>
                                </li>
                            @endif     -->
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }}
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href= "{{url('/home')}}"> {{ __('Home') }} </a>

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
                        @endguest




                        <li class="nav-item">
                            <a href="{{url('/contactus')}}" class="nav-link">{{ __('Contact Us') }}</a>
                        </li>
                        <li class="nav-item">
                            <a href="{{url('/about')}}" class="nav-link">{{ __('About') }}</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>

        <main class="py-0">
        <div class="xyz">
            <br><br>
            <h3>Klinik Amanda</h3>
            <h4>Keluarga Besar RSPI Jakarta Selatan</h4><br>
            <img src="https://korindonews.com/wp-content/uploads/2018/05/klinik-terbaik-papua-bpjs-04.jpg"></img><br><br><br>
            <p>Klinik ini didirikan pada tahun 2018 dibawah naungan Rumah Sakit Pondok Indah Jakarta Selatan, yang juga merupakan keluarga besar<br> dari 45 klinik yang tersebar di seluruh Indonesia. Klinik Amanda memiliki poli lengkap layaknya rumah sakit pada umumnya,<br>mulai dari poli umum, poli mata, poli gigi, dan lain-lain.</p>
        </div>
        </main>
    </div>
</body>
</html>
