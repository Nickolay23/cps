<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CoreUI CSS -->
    <link rel="stylesheet" href="https://unpkg.com/@coreui/coreui/dist/css/coreui.min.css" crossorigin="anonymous">
    <link href="{{ asset('/css/app.css') }}" rel="stylesheet">

    <title>{{ config('app.name', 'Laravel') }}</title>
</head>
<body class="c-app">
    <header class="header">
        <div class="header__container">
            <div class="header__left">
                <a href="/" class="header__logo">
                    <img src="{{ asset('storage/banners/CPS.svg') }}" />
                </a>
                <div class="header__nav">
                    <a href="{{route('delivery')}}" class="header__nav-item">{{__('Pay and delivery')}}</a>
                    <a href="{{route('contacts')}}" class="header__nav-item">{{__('Contacts')}}</a>
                </div>
            </div>

            <div class="header__right">
                <form class="header__search-wrap">
                    <input class="header__search form-control" type="search" placeholder="Поиск" aria-label="Поиск">
                    <button class="bi bi-search header__search-btn"></button>
                </form>
                <div class="header__icons-nav">
                    <a href="tel:+79781111111" class="header__icons-nav-item bi bi-telephone-fill"></a>
                    <a href="#" class="header__icons-nav-item bi bi-cart-fill">
                        @if(session()->has('cartItems'))
                            <span class="header__icons-nav-item-counter">{{session()->get('cartItems')}}</span>
                        @endif
                    </a>
                    @auth
                        <ul class="header-nav justify-content-end">
                            <li class="nav-item dropdown">
                                <a class="nav-link" data-bs-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">
                                    <div>{{auth()->user()->name}}</div>
                                </a>
                                <div class="dropdown-menu dropdown-menu-end pt-0"
                                    <div class="nav">
                                        <a class="dropdown-item" href="{{route('users.home')}}">
                                            <i class="bi bi-person"></i> {{__('Account')}}
                                        </a>
                                        <a class="dropdown-item" href="{{route('users.order-index')}}">
                                            <i class="bi bi-journal-check"></i> {{__('Orders')}}
                                        </a>
                                        <a class="dropdown-item" href="#">
                                            <i class="bi bi-wrench-adjustable"></i> {{__('Garage')}}
                                        </a>
                                        <a class="dropdown-item" href="{{ route('logout') }}"
                                           onclick="event.preventDefault();
                                document.getElementById('logout-form').submit();">
                                            <i class="bi bi-box-arrow-left"></i> {{ __('Logout') }}
                                        </a>

                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                            @csrf
                                        </form>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    @else
                        <a href="{{ route('login') }}" class="header__icons-nav-item bi bi-person-fill"></a>
                    @endauth
                </div>
            </div>
        </div>
    </header>
<div class="bg-light min-vh-100 d-flex flex-row align-items-center">
    <div class="container px-0">
        <div class="row justify-content-center">
            <div class="col-lg-12">
                <div class=" d-block d-md-flex row">
                    <div class="p-4 mb-0">
                        <div class="">
                            @yield('content')
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Optional JavaScript -->
<!-- Popper.js first, then CoreUI JS -->
<script src="https://unpkg.com/@popperjs/core@2"></script>
<script src="https://unpkg.com/@coreui/coreui/dist/js/coreui.min.js"></script>

</body>
</html>

{{--<!doctype html>--}}
{{--<html lang="en">--}}
{{--<head>--}}
{{--    <!-- Required meta tags -->--}}
{{--    <meta charset="utf-8">--}}
{{--    <meta name="viewport" content="width=device-width, initial-scale=1">--}}

{{--    <!-- CoreUI CSS -->--}}
{{--    <link rel="stylesheet" href="https://unpkg.com/@coreui/coreui/dist/css/coreui.min.css" crossorigin="anonymous">--}}

{{--    <title>{{ config('app.name', 'Laravel') }}</title>--}}
{{--</head>--}}
{{--<body class="c-app">--}}

{{--@yield('content')--}}

{{--<!-- Optional JavaScript -->--}}
{{--<!-- Popper.js first, then CoreUI JS -->--}}
{{--<script src="https://unpkg.com/@popperjs/core@2"></script>--}}
{{--<script src="https://unpkg.com/@coreui/coreui/dist/js/coreui.min.js"></script>--}}
{{--</body>--}}
{{--</html>--}}
{{--<!doctype html>--}}
{{--<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">--}}
{{--<head>--}}
{{--    <meta charset="utf-8">--}}
{{--    <meta name="viewport" content="width=device-width, initial-scale=1">--}}

{{--    <!-- CSRF Token -->--}}
{{--    <meta name="csrf-token" content="{{ csrf_token() }}">--}}

{{--    <title>{{ config('app.name', 'Laravel') }}</title>--}}

{{--    <!-- Scripts -->--}}
{{--    <script src="{{ asset('js/app.js') }}" defer></script>--}}

{{--    <!-- Fonts -->--}}
{{--    <link rel="dns-prefetch" href="//fonts.gstatic.com">--}}
{{--    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">--}}

{{--    <!-- Styles -->--}}
{{--    <link href="{{ asset('css/app.css') }}" rel="stylesheet">--}}
{{--</head>--}}
{{--<body>--}}
{{--    <div id="app">--}}
{{--        <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">--}}
{{--            <div class="container">--}}
{{--                <a class="navbar-brand" href="{{ url('/') }}">--}}
{{--                    {{ config('app.name', 'Laravel') }}--}}
{{--                </a>--}}
{{--                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">--}}
{{--                    <span class="navbar-toggler-icon"></span>--}}
{{--                </button>--}}

{{--                <div class="collapse navbar-collapse" id="navbarSupportedContent">--}}
{{--                    <!-- Left Side Of Navbar -->--}}
{{--                    <ul class="navbar-nav me-auto">--}}

{{--                    </ul>--}}

{{--                    <!-- Right Side Of Navbar -->--}}
{{--                    <ul class="navbar-nav ms-auto">--}}
{{--                        <!-- Authentication Links -->--}}
{{--                        @guest--}}
{{--                            @if (Route::has('login'))--}}
{{--                                <li class="nav-item">--}}
{{--                                    <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>--}}
{{--                                </li>--}}
{{--                            @endif--}}

{{--                            @if (Route::has('register'))--}}
{{--                                <li class="nav-item">--}}
{{--                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>--}}
{{--                                </li>--}}
{{--                            @endif--}}
{{--                        @else--}}
{{--                            <li class="nav-item dropdown">--}}
{{--                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>--}}
{{--                                    {{ Auth::user()->name }}--}}
{{--                                </a>--}}

{{--                                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">--}}
{{--                                    <a class="dropdown-item" href="{{ route('logout') }}"--}}
{{--                                       onclick="event.preventDefault();--}}
{{--                                                     document.getElementById('logout-form').submit();">--}}
{{--                                        {{ __('Logout') }}--}}
{{--                                    </a>--}}

{{--                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">--}}
{{--                                        @csrf--}}
{{--                                    </form>--}}
{{--                                </div>--}}
{{--                            </li>--}}
{{--                        @endguest--}}
{{--                    </ul>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </nav>--}}

{{--        <main class="py-4">--}}
{{--            @yield('content')--}}
{{--        </main>--}}
{{--    </div>--}}
{{--</body>--}}
{{--</html>--}}
