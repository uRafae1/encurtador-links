<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="shortcut icon" href="favicon.png" />
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="description" content="" />
    <meta name="keywords" content="bootstrap, bootstrap5" />

    <title>{{ config('app.name', 'Encurtador de links') }}</title>

    <!-- Scripts -->
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])

    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Work+Sans:wght@400;500;600;700&display=swap" rel="stylesheet" />
    
    <link rel="stylesheet" href="fonts/icomoon/style.css" />
    <link rel="stylesheet" href="fonts/flaticon/font/flaticon.css" />

    <link rel="stylesheet" href="css/tiny-slider.css" />
    <link rel="stylesheet" href="css/aos.css" />
    <link rel="stylesheet" href="css/style.css" />

    <title>
      Encurtador de links
    </title>

</head>

<body>
    <div id="app">
        <nav class="site-nav">
            <div class="site-mobile-menu site-navbar-target">
                <div class="site-mobile-menu-header">
                    <div class="site-mobile-menu-close">
                        <span class="icofont-close js-menu-toggle"></span>
                    </div>
                </div>
                <div class="site-mobile-menu-body"></div>
            </div>
            <div class="container-fluid">
                <div class="menu-bg-wrap">
                    <div class="site-navigation">
                        <a href="#" class="logo m-0 float-start">ENCURTADOR DE LINKS</a>
                        <ul class="js-clone-nav d-none d-lg-inline-block text-start site-menu float-end">
                            <li><a href="/">Encurtador</a></li>
                            @guest
                                @if (Route::has('login'))
                                    <li>
                                        <a href="{{ route('login') }}">{{ __('Login') }}</a>
                                    </li>
                                @endif

                                @if (Route::has('register'))
                                    <li>
                                        <a href="{{ route('register') }}">{{ __('Registrar') }}</a>
                                    </li>
                                @endif
                                @else
                                    <li class="nav-item dropdown">
                                        <a id="navbarDropdownProfile" href="#" class="dropdown-toggle" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                            {{ Auth::user()->name }}
                                        </a>

                                        <div class="dropdown-menu" aria-labelledby="navbarDropdownProfile">
                                            <a class="dropdown-item" href="{{ route('histopage') }}">
                                                {{ __('Histórico')}}
                                            </a>
                                            <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                                                                document.getElementById('logout-form').submit();">
                                                {{ __('Sair') }}
                                            </a>

                                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                                @csrf
                                            </form>
                                        </div>
                                    </li>
                                @endguest
                                <li>
                                    <a href="{{ route('admpage') }}">Página do administrador</a>
                                </li>
                        </ul>
                        <a
                            href="#"
                            class="burger light me-auto float-end mt-1 site-menu-toggle js-menu-toggle d-inline-block d-lg-none"
                            data-toggle="collapse"
                            data-target="#main-navbar"
                            >
                            <span></span>
                        </a>
                    </div>
                </div>
            </div>
        </nav>
        <main>
            @yield('content')
        </main>
        
    </div>

    <script src="js/tiny-slider.js"></script>
    <script src="js/aos.js"></script>
    <script src="js/navbar.js"></script>
    <script src="js/counter.js"></script>
    <script src="js/custom.js"></script>

</body>

</html>