<div class="container-fluid">
    <div class="d-flex flex-wrap">
        <div class="flex-fill">
            <ul class="nav">
                <li class="nav-item">
                    <a href="{{route('index')}}" class="nav-link link-dark">{{__('Main')}}</a>
                </li>
                <li class="nav-item">
                    <a href="{{route('delivery')}}" class="nav-link link-dark">{{__('Pay and delivery')}}</a>
                </li>
                <li class="nav-item">
                    <a href="{{route('contacts')}}" class="nav-link link-dark">{{__('Contacts')}}</a>
                </li>
            </ul>
        </div>
        <div class="flex-fill">
            <img src="{{ asset('storage/banners/abbr.png') }}" class="img-fluid" />
{{--            <p class="pt-2 pb-0">Zap82shop.ru</p>--}}

        </div>
        <div class="flex-fill">
            <a href="#" class="justify-content-center nav-link link-dark">
                <i class="bi-telephone-fill"></i>
                +7978-123-12-12
            </a>
        </div>
        <div class="flex-fill">
            @auth
                <ul class="header-nav justify-content-end">
                    <li class="nav-item dropdown">
                        <a class="nav-link" data-bs-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">
                            <div>{{auth()->user()->name}}</div>
                        </a>
                        <div class="dropdown-menu dropdown-menu-end pt-0">
{{--                            <div class="dropdown-header bg-light py-2">--}}
{{--                                <div class="fw-semibold">{{__('Account')}}</div>--}}
{{--                            </div>--}}
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
                <ul class="nav justify-content-end">
                    <li class="nav-item">
                        <a href="{{ route('login') }}" class="nav-link link-dark text-decoration-none">{{__('Login')}}</a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ route('register') }}" class="nav-link link-dark text-decoration-none">{{__('Registration')}}</a>
                    </li>
                </ul>
            @endauth
        </div>
    </div>
</div>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container-fluid">
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Переключатель навигации">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse gx-2" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0 col-xl-2">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        {{__('Catalog')}}
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdownLink">
                        @foreach($categories as $category)
                            <li><a class="dropdown-item" href="{{ route('category', $category->code) }}">{{$category->name}}</a></li>
                        @endforeach
{{--                        <li><hr class="dropdown-divider"></li>--}}
                    </ul>
                </li>
            </ul>
            <form class="d-flex col-xl-8">
                <input class="form-control me-2" type="search" placeholder="Поиск" aria-label="Поиск">
                <button class="btn btn-outline-success" type="submit">Поиск</button>
            </form>
            <div class="col-xl-2 text-center">
                <a href="{{route('cart')}}" class="text-decoration-none link-dark">
                    <i class="bi-cart"></i>
                    {{__('Cart')}}
                    @if(session()->has('cartItems'))
                        {{session()->get('cartItems')}}
                    @endif
                </a>
            </div>
        </div>
    </div>
</nav>
{{--<div class="container-fluid">--}}
{{--    <ul class="header-nav ms-3">--}}
{{--        <li class="nav-item dropdown"><a class="nav-link py-0" data-coreui-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">--}}
{{--                <div>{{auth()->user()->name}}</div>--}}
{{--            </a>--}}
{{--            <div class="dropdown-menu dropdown-menu-end pt-0">--}}
{{--                <div class="dropdown-header bg-light py-2">--}}
{{--                    <div class="fw-semibold">Account</div>--}}
{{--                </div>--}}
{{--                <a class="dropdown-item" href="{{ route('logout') }}"--}}
{{--                   onclick="event.preventDefault();--}}
{{--                            document.getElementById('logout-form').submit();">--}}
{{--                    <svg class="icon me-2">--}}
{{--                        <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-account-logout"></use>--}}
{{--                    </svg> {{ __('Logout') }}--}}
{{--                </a>--}}

{{--                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">--}}
{{--                    @csrf--}}
{{--                </form>--}}
{{--            </div>--}}
{{--        </li>--}}
{{--    </ul>--}}
{{--</div>--}}
