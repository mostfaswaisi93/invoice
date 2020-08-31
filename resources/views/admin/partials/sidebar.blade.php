@include('admin.partials.menu')

<!-- BEGIN: Sidebar -->
<div class="main-menu menu-fixed menu-dark menu-accordion menu-shadow" data-scroll-to-active="true">
    <div class="navbar-header">
        <ul class="nav navbar-nav flex-row">
            <li class="nav-item mr-auto">
                <a class="navbar-brand" href="{{ route('admin.index') }}">
                    <img class="round" src="{{ url('admin_files/invoice.png') }}" alt="avatar" height="35" width="35">
                    <h2 class="brand-text mb-0" style="color: #fff">{{ trans('admin.invoice') }}</h2>
                </a>
            </li>
        </ul>
    </div>
    <div class="shadow-bottom"></div>
    <div class="main-menu-content">
        <ul class="navigation navigation-main" id="main-menu-navigation" data-menu="menu-navigation">
            <li class="navigation-header"></li>
            <li {{ request()->route()->getName() === 'admin.index' ? 'class=active' : '' }}>
                <a href="{{ route('admin.index') }}" class="nav-link">
                    <i class="fa fa-home"></i>
                    <span class="title">{{ trans('admin.home') }}</span>
                </a>
            </li>
            <li class="nav-item">
                <a href="#">
                    <i class="feather icon-file"></i>
                    <span class="menu-title">{{ trans('admin.invoices') }}</span>
                </a>
                <ul class="menu-content">
                    <li {{ request()->route()->getName() === 'admin.invoices.index' ? 'class=active' : '' }}>
                        <a href="{{ route('admin.invoices.index') }}" class="nav-link">
                            <i class="feather icon-file"></i>
                            <span class="title">{{ trans('admin.invoices') }}</span>
                        </a>
                    </li>
                    {{-- <li {{ request()->route()->getName() === 'admin.invoices.ajax.index' ? 'class=active' : '' }}>
                        <a href="{{ route('admin.invoices.ajax.index') }}" class="nav-link">
                            <i class="feather icon-file"></i>
                            <span class="title">{{ trans('admin.invoices') }} AJAX</span>
                        </a>
                    </li> --}}
                </ul>
            </li>
            <li class="nav-item">
                <a href="#">
                    <i class="fa fa-bar-chart"></i>
                    <span class="menu-title">{{ trans('admin.reports') }}</span>
                </a>
                <ul class="menu-content">
                    <li>
                        <a href="data-list-view.html">
                            <i class="feather icon-circle"></i>
                            <span class="menu-item">List View</span>
                        </a>
                    </li>
                </ul>
            </li>
            <li class="nav-item">
                <a href="#">
                    <i class="feather icon-user-check"></i>
                    <span class="menu-title">{{ trans('admin.account_settings') }}</span>
                </a>
                <ul class="menu-content">
                    <li {{ request()->route()->getName() === 'admin.users.edit' ? 'class=active' : '' }}>
                        <a href="users/{{ auth()->user()->id }}/edit" class="nav-link">
                            <i class="feather icon-edit"></i>
                            <span class="title">{{ trans('admin.edit_user') }}</span>
                        </a>
                    </li>
                    <li {{ request()->route()->getName() === 'admin.users.change' ? 'class=active' : '' }}>
                        <a href="users/{{ auth()->user()->id }}/change" class="nav-link">
                            <i class="feather icon-lock "></i>
                            <span class="title">{{ trans('admin.change_password') }}</span>
                        </a>
                    </li>
                </ul>
            </li>
            <li {{ request()->route()->getName() === 'admin.settings.index' ? 'class=active' : '' }}>
                <a href="{{ route('admin.settings.index') }}" class="nav-link">
                    <i class="feather icon-settings"></i>
                    <span class="title">{{ trans('admin.settings') }}</span>
                </a>
            </li>
        </ul>
    </div>
</div>
<!-- END: Sidebar -->

@include('admin.partials.master')