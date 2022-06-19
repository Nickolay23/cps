<div class="sidebar sidebar-dark sidebar-fixed" id="sidebar">
    <ul class="sidebar-nav" data-coreui="navigation" data-simplebar="">

        @if (auth()->user()->is_admin)
            <li class="nav-item bg-black text-white">
                <a class="nav-link" href="{{ route('admin.admin') }}">
                    {{__('Admin panel')}}
                </a>
            </li>
            <li class="nav-divider"></li>
            <li class="nav-group">
                <a class="nav-link text-wrap" href="{{route('admin.users.index')}}">
                    {{__('Users')}}
                </a>
            </li>
            <li class="nav-group">
                <a class="nav-link text-wrap" href="{{route('admin.categories.index')}}">
                    {{__('Categories')}}
                </a>
            </li>
            <li class="nav-group">
                <a class="nav-link text-wrap" href="{{route('admin.spareparts.index')}}">
                    {{__('Spareparts')}}
                </a>
            </li>
            <li class="nav-group">
                <a class="nav-link" href="{{route('admin.featuregroups.index')}}">
                    {{__('Feature groups')}}
                </a>
            </li>
            <li class="nav-group">
                <a class="nav-link" href="{{route('admin.features.index')}}">
                    {{__('Features')}}
                </a>
            </li>
            <li class="nav-group">
                <a class="nav-link text-wrap" href="{{route('admin.manufacturers.index')}}">
                    {{__('Manufacturers')}}
                </a>
            </li>
            <li class="nav-group">
                <a class="nav-link text-wrap" href="{{route('admin.carmodels.index')}}">
                    {{__('Car models')}}
                </a>
            </li>
            <li class="nav-group">
                <a class="nav-link text-wrap" href="{{route('admin.partmanufacturers.index')}}">
                    {{__('Part manufacturers')}}
                </a>
            </li>
            <li class="nav-group">
                <a class="nav-link text-wrap" href="{{route('admin.suppliers.index')}}">
                    {{__('Suppliers')}}
                </a>
            </li>
            <li class="nav-group">
                <a class="nav-link text-wrap" href="{{route('admin.services.index')}}">
                    {{__('Services')}}
                </a>
            </li>
            <li class="nav-group">
                <a class="nav-link text-wrap" href="{{route('admin.works.index')}}">
                    {{__('Works')}}
                </a>
            </li>
            <li class="nav-group">
                <a class="nav-link text-wrap" href="{{route('admin.reviews.index')}}">
                    {{__('Reviews')}}
                </a>
            </li>
        @endif
    </ul>
</div>
