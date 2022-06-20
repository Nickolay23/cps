<header class="header">
    <div class="header__container">
        <div class="header__left">
            <a href="/" class="header__logo">
                <img src="{{ asset('storage/banners/CPS.svg') }}" />
            </a>
            <div class="header__nav">
                <ul class="header__nav-item navbar-nav>
                    <li class="nav-item dropdown">
                        <a class="dropdown-toggle" href="#" id="navbarDropdownLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            {{__('Catalog')}}
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdownLink">
                            @foreach($categories as $category)
                                <li><a class="dropdown-item" href="{{ route('category', $category->code) }}">{{$category->name}}</a></li>
                            @endforeach
                        </ul>
                    </li>
                </ul>
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
                <a href="{{route('cart')}}" class="header__icons-nav-item bi bi-cart-fill">
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
                            <div class="dropdown-menu dropdown-menu-end pt-0">
                                <div class="nav">
                                    <a class="dropdown-item" href="{{route('users.home')}}">
                                        <i class="bi bi-person"></i> {{__('Account')}}
                                    </a>
                                    <a class="dropdown-item" href="{{route('users.order-index')}}">
                                        <i class="bi bi-journal-check"></i> {{__('Orders')}}
                                    </a>
                                    <a class="dropdown-item" href="{{route('users.user-cars')}}">
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
