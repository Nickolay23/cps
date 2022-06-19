<div class="sidebar sidebar-dark sidebar-fixed" id="sidebar">
    <ul class="sidebar-nav" data-coreui="navigation" data-simplebar="">
        <li class="nav-item"><a class="nav-link" href="{{ route('admin.admin') }}">
                <svg class="nav-icon">
                    <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-speedometer"></use>
                </svg> Dashboard</a></li>
        @if (auth()->user()->is_admin)
            <li class="nav-title">{{__('Admin')}}</li>
            <li class="nav-group">
                <a class="nav-link text-wrap" href="{{route('admin.pages.index')}}">
                    <svg class="nav-icon">
                        <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-puzzle"></use>
                    </svg>
                    {{__('Pages')}}
                </a>
            </li>
            <li class="nav-group">
                <a class="nav-link text-wrap" href="{{route('admin.users.index')}}">
                    <svg class="nav-icon">
                        <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-puzzle"></use>
                    </svg>
                    {{__('Users')}}
                </a>
            </li>
            <li class="nav-group">
                <a class="nav-link text-wrap" href="{{route('admin.categories.index')}}">
                    <svg class="nav-icon">
                        <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-puzzle"></use>
                    </svg>
                    {{__('Categories')}}
                </a>
            </li>
            <li class="nav-group">
                <a class="nav-link text-wrap" href="{{route('admin.spareparts.index')}}">
                    <svg class="nav-icon">
                        <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-puzzle"></use>
                    </svg>
                    {{__('Spareparts')}}
                </a>
            </li>
            <li class="nav-group">
                <a class="nav-link" href="{{route('admin.featuregroups.index')}}">
                    <svg class="nav-icon">
                        <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-puzzle"></use>
                    </svg>
                    {{__('Feature groups')}}
                </a>
            </li>
            <li class="nav-group">
                <a class="nav-link" href="{{route('admin.features.index')}}">
                    <svg class="nav-icon">
                        <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-puzzle"></use>
                    </svg>
                    {{__('Features')}}
                </a>
            </li>
            <li class="nav-group">
                <a class="nav-link text-wrap" href="{{route('admin.manufacturers.index')}}">
                    <svg class="nav-icon">
                        <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-puzzle"></use>
                    </svg>
                    {{__('Manufacturers')}}
                </a>
            </li>
            <li class="nav-group">
                <a class="nav-link text-wrap" href="{{route('admin.carmodels.index')}}">
                    <svg class="nav-icon">
                        <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-puzzle"></use>
                    </svg>
                    {{__('Car models')}}
                </a>
            </li>
            <li class="nav-group">
                <a class="nav-link text-wrap" href="{{route('admin.partmanufacturers.index')}}">
                    <svg class="nav-icon">
                        <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-puzzle"></use>
                    </svg>
                    {{__('Part manufacturers')}}
                </a>
            </li>
            <li class="nav-group">
                <a class="nav-link text-wrap" href="{{route('admin.works.index')}}">
                    <svg class="nav-icon">
                        <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-puzzle"></use>
                    </svg>
                    {{__('Works')}}
                </a>
            </li>
        @endif
        {{--        <li class="nav-group"><a class="nav-link nav-group-toggle" href="#">--}}
        {{--                <svg class="nav-icon">--}}
        {{--                    <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-puzzle"></use>--}}
        {{--                </svg> Base</a>--}}
        {{--            <ul class="nav-group-items">--}}
        {{--                <li class="nav-item"><a class="nav-link" href="base/breadcrumb.html"><span class="nav-icon"></span> Breadcrumb</a></li>--}}
        {{--                <li class="nav-item"><a class="nav-link" href="base/cards.html"><span class="nav-icon"></span> Cards</a></li>--}}
        {{--                <li class="nav-item"><a class="nav-link" href="base/navs.html"><span class="nav-icon"></span> Navs</a></li>--}}
        {{--                <li class="nav-item"><a class="nav-link" href="base/pagination.html"><span class="nav-icon"></span> Pagination</a></li>--}}
        {{--            </ul>--}}
        {{--        </li>--}}
{{--        <li class="nav-group"><a class="nav-link nav-group-toggle" href="#">--}}
{{--                <svg class="nav-icon">--}}
{{--                    <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-cursor"></use>--}}
{{--                </svg> Buttons</a>--}}
{{--            <ul class="nav-group-items">--}}
{{--                <li class="nav-item"><a class="nav-link" href="buttons/buttons.html"><span class="nav-icon"></span> Buttons</a></li>--}}
{{--                <li class="nav-item"><a class="nav-link" href="buttons/button-group.html"><span class="nav-icon"></span> Buttons Group</a></li>--}}
{{--                <li class="nav-item"><a class="nav-link" href="buttons/dropdowns.html"><span class="nav-icon"></span> Dropdowns</a></li>--}}
{{--            </ul>--}}
{{--        </li>--}}
{{--        <li class="nav-item"><a class="nav-link" href="charts.html">--}}
{{--                <svg class="nav-icon">--}}
{{--                    <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-chart-pie"></use>--}}
{{--                </svg> Charts</a></li>--}}
{{--        <li class="nav-group"><a class="nav-link nav-group-toggle" href="#">--}}
{{--                <svg class="nav-icon">--}}
{{--                    <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-notes"></use>--}}
{{--                </svg> Forms</a>--}}
{{--            <ul class="nav-group-items">--}}
{{--                <li class="nav-item"><a class="nav-link" href="forms/form-control.html"> Form Control</a></li>--}}
{{--                <li class="nav-item"><a class="nav-link" href="forms/select.html"> Select</a></li>--}}
{{--                <li class="nav-item"><a class="nav-link" href="forms/checks-radios.html"> Checks and radios</a></li>--}}
{{--                <li class="nav-item"><a class="nav-link" href="forms/range.html"> Range</a></li>--}}
{{--                <li class="nav-item"><a class="nav-link" href="forms/input-group.html"> Input group</a></li>--}}
{{--                <li class="nav-item"><a class="nav-link" href="forms/floating-labels.html"> Floating labels</a></li>--}}
{{--                <li class="nav-item"><a class="nav-link" href="forms/layout.html"> Layout</a></li>--}}
{{--                <li class="nav-item"><a class="nav-link" href="forms/validation.html"> Validation</a></li>--}}
{{--            </ul>--}}
{{--        </li>--}}
{{--        <li class="nav-group"><a class="nav-link nav-group-toggle" href="#">--}}
{{--                <svg class="nav-icon">--}}
{{--                    <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-star"></use>--}}
{{--                </svg> Icons</a>--}}
{{--            <ul class="nav-group-items">--}}
{{--                <li class="nav-item"><a class="nav-link" href="icons/coreui-icons-free.html"> CoreUI Icons<span class="badge badge-sm bg-success ms-auto">Free</span></a></li>--}}
{{--                <li class="nav-item"><a class="nav-link" href="icons/coreui-icons-brand.html"> CoreUI Icons - Brand</a></li>--}}
{{--                <li class="nav-item"><a class="nav-link" href="icons/coreui-icons-flag.html"> CoreUI Icons - Flag</a></li>--}}
{{--            </ul>--}}
{{--        </li>--}}
{{--        <li class="nav-group"><a class="nav-link nav-group-toggle" href="#">--}}
{{--                <svg class="nav-icon">--}}
{{--                    <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-bell"></use>--}}
{{--                </svg> Notifications</a>--}}
{{--            <ul class="nav-group-items">--}}
{{--                <li class="nav-item"><a class="nav-link" href="notifications/alerts.html"><span class="nav-icon"></span> Alerts</a></li>--}}
{{--                <li class="nav-item"><a class="nav-link" href="notifications/badge.html"><span class="nav-icon"></span> Badge</a></li>--}}
{{--                <li class="nav-item"><a class="nav-link" href="notifications/modals.html"><span class="nav-icon"></span> Modals</a></li>--}}
{{--                <li class="nav-item"><a class="nav-link" href="notifications/toasts.html"><span class="nav-icon"></span> Toasts</a></li>--}}
{{--            </ul>--}}
{{--        </li>--}}
{{--        <li class="nav-item"><a class="nav-link" href="widgets.html">--}}
{{--                <svg class="nav-icon">--}}
{{--                    <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-calculator"></use>--}}
{{--                </svg> Widgets<span class="badge badge-sm bg-info ms-auto">NEW</span></a></li>--}}
        <li class="nav-divider"></li>
        <li class="nav-title">Extras</li>
        <li class="nav-group"><a class="nav-link nav-group-toggle" href="#">
                <svg class="nav-icon">
                    <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-star"></use>
                </svg> Pages</a>
            <ul class="nav-group-items">
                <li class="nav-item"><a class="nav-link" href="login.html" target="_top">
                        <svg class="nav-icon">
                            <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-account-logout"></use>
                        </svg> Login</a></li>
                <li class="nav-item"><a class="nav-link" href="register.html" target="_top">
                        <svg class="nav-icon">
                            <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-account-logout"></use>
                        </svg> Register</a></li>
                <li class="nav-item"><a class="nav-link" href="404.html" target="_top">
                        <svg class="nav-icon">
                            <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-bug"></use>
                        </svg> Error 404</a></li>
                <li class="nav-item"><a class="nav-link" href="500.html" target="_top">
                        <svg class="nav-icon">
                            <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-bug"></use>
                        </svg> Error 500</a></li>
            </ul>
        </li>
    </ul>
    <button class="sidebar-toggler" type="button" data-coreui-toggle="unfoldable"></button>
</div>
