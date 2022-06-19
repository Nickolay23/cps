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

    <title>{{ config('app.name', 'Laravel') }}</title>
</head>
<body class="c-app">
@if(auth()->user()->is_admin)
    @include('admin.partials.sidebar')
    <div class="wrapper d-flex flex-column min-vh-100 bg-light">
        <header class="header header-sticky mb-4">
            <div class="container-fluid">
                <button class="header-toggler px-md-0 me-md-3" type="button" onclick="coreui.Sidebar.getInstance(document.querySelector('#sidebar')).toggle()">
                    <svg class="icon icon-lg">
                        <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-menu"></use>
                    </svg>
                </button>
{{--                <ul class="header-nav d-none d-md-flex">--}}
{{--                    <li class="nav-item"><a class="nav-link" href="#">Dashboard</a></li>--}}
{{--                    <li class="nav-item"><a class="nav-link" href="#">Users</a></li>--}}
{{--                    <li class="nav-item"><a class="nav-link" href="#">Settings</a></li>--}}
{{--                </ul>--}}
                <ul class="header-nav ms-3">
                    <li class="nav-item dropdown">
                        <a class="nav-link py-0" data-bs-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">
                            <div>{{auth()->user()->name}}</div>
                        </a>
                        <div class="dropdown-menu dropdown-menu-end pt-0">
                            <div class="dropdown-header bg-light py-2">
                                <div class="fw-semibold">{{__('Account')}}</div>
                            </div>
                            <a class="dropdown-item" href="{{ route('logout') }}"
                               onclick="event.preventDefault();
                        document.getElementById('logout-form').submit();">
                                <svg class="icon me-2">
                                    <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-account-logout"></use>
                                </svg> {{ __('Logout') }}
                            </a>

                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                @csrf
                            </form>
                        </div>
                    </li>
                </ul>
            </div>
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
        </header>
        <div class="body flex-grow-1 px-3">
            @yield('content')
        </div>
    </div>
@endif

<!-- Optional JavaScript -->
<!-- Popper.js first, then CoreUI JS -->
<script src="{{ asset('js/app.js') }}" defer />
<script src="https://unpkg.com/@popperjs/core@2"></script>
<script src="https://unpkg.com/@coreui/coreui/dist/js/coreui.min.js"></script>
</body>
</html>
