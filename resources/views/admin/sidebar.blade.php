<div class="vertical-menu">

    <div data-simplebar class="h-100">

        <!--- Sidemenu -->
        <div id="sidebar-menu">
            <!-- Left Menu Start -->
            <ul class="metismenu list-unstyled" id="side-menu">
                <li class="menu-title">{{ __('site.menu') }}</li>

                <li>
                    <a href="{{ route('admin.index') }}" class="waves-effect">
                        <i class="ri-dashboard-line"></i><span
                            class="badge rounded-pill bg-success float-end">3</span>
                        <span>{{ __('site.dashboard') }}</span>
                    </a>
                </li>
                <!-- end li -->
                {{-- category --}}
                <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                        <i class="fa fa-tags"></i>
                        <span>{{ __('site.categories') }}</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="{{ route('admin.categories.index') }}">All Category</a></li>
                        <li><a href="{{ route('admin.categories.create') }}">Add Category</a></li>
                    </ul>
                </li>

                {{-- product --}}
                <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                        <i class="fa fa-heart"></i>
                        <span>{{ __('site.products') }}</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="{{ route('admin.Products.index') }}">All Products</a></li>
                        <li><a href="{{ route('admin.Products.create') }}">Add Products</a></li>
                    </ul>
                </li>

                <li>
                    <a href="calendar.html" class=" waves-effect">
                        <i class="fa fa-cart-plus"></i>
                        <span>{{ __('site.orders') }}</span>
                    </a>
                </li>
                <li>
                    <a href="calendar.html" class=" waves-effect">
                        <i class="fa fa-money-bill"></i>
                        <span>{{ __('site.payments') }}</span>
                    </a>
                </li>
                <li>
                    <a href="calendar.html" class=" waves-effect">
                        <i class="fa fa-users"></i>
                        <span>{{ __('site.users') }}</span>
                    </a>
                </li>
                <!-- end li -->
            </ul>
            <!-- end ul -->
        </div>
        <!-- Sidebar -->
    </div>
</div>
