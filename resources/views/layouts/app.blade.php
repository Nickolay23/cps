<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CoreUI CSS -->
    <link rel="stylesheet" href="https://unpkg.com/@coreui/coreui/dist/css/coreui.min.css" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery.perfect-scrollbar/1.5.5/css/perfect-scrollbar.css" integrity="sha512-2xznCEl5y5T5huJ2hCmwhvVtIGVF1j/aNUEJwi/BzpWPKEzsZPGpwnP1JrIMmjPpQaVicWOYVu8QvAIg9hwv9w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="{{ asset('/css/app.css') }}" rel="stylesheet">

    {{--    <title>{{ config('app.name', 'Laravel') }}</title>--}}
    <title>{{__('Оnline_shop')}}: @yield('title')</title>
</head>
<body class="c-app">
{{--02052022--}}
<div class="wrapper d-flex flex-column min-vh-100 bg-light">
    {{--        <header class="header header-sticky mb-4">--}}
    {{--            @include('partials.header')--}}



    {{--            <div class="header-divider"></div>--}}
    {{--            <div class="container-fluid">--}}
    {{--                <nav aria-label="breadcrumb">--}}
    {{--                    <ol class="breadcrumb my-0 ms-2">--}}
    {{--                        <li class="breadcrumb-item">--}}
    {{--                            <span>Home</span>--}}
    {{--                        </li>--}}
    {{--                        <li class="breadcrumb-item active"><span>Dashboard</span></li>--}}
    {{--                    </ol>--}}
    {{--                </nav>--}}
    {{--            </div>--}}


    {{--            02052022--}}
    {{--        </header>--}}
    <div class="body flex-grow-1 px-3">
        @include('partials.header')
        @if(session()->has('success'))
            <p class="alert alert-success">{{ session()->get('success') }}</p>
        @endif
        @if(session()->has('warning'))
            <p class="alert alert-warning">{{ session()->get('warning') }}</p>
        @endif
        @yield('content')
    </div>
</div>

<!-- Optional JavaScript -->
<!-- Popper.js first, then CoreUI JS -->
{{--<script src="https://unpkg.com/@popperjs/core@2"></script>--}}
<script src="{{ asset('js/app.js') }}" defer />
<script src="https://unpkg.com/@coreui/coreui/dist/js/coreui.min.js"></script>
</body>
</html>
