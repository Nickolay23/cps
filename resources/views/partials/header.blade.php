<div class="container-fluid">
    <div class="d-flex">
        <div class="flex-fill">
            <ul class="nav">
                <li class="nav-item">
                    <a href="#" class="nav-link link-dark">{{__('Main')}}</a>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link link-dark">{{__('Pay and delivery')}}</a>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link link-dark">{{__('Contacts')}}</a>
                </li>
            </ul>
        </div>
        <div class="flex-fill">
            @auth
                <ul class="header-nav ms-3">
                    <li class="nav-item dropdown">
                        <a class="nav-link py-0" data-coreui-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">
                            <div>{{auth()->user()->name}}</div>
                        </a>
                        <div class="dropdown-menu dropdown-menu-end pt-0">
                            <div class="dropdown-header bg-light py-2">
                                <div class="fw-semibold">Account</div>
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
            @else
                <ul class="nav justify-content-center">
                    <li class="nav-item">
                        <a href="{{ route('login') }}" class="nav-link link-dark text-decoration-underline">{{__('Login')}}</a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ route('register') }}" class="nav-link link-dark text-decoration-underline">{{__('Registration')}}</a>
                    </li>
                </ul>
            @endauth
        </div>
    </div>
</div>

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
