@include('admin.partials.menu')

<!-- BEGIN: Sidebar -->
<div class="main-menu menu-fixed menu-dark menu-accordion menu-shadow" data-scroll-to-active="true">
    <div class="navbar-header">
        <ul class="nav navbar-nav flex-row">
            <li class="nav-item mr-auto">
                <a class="navbar-brand" href="{{ route('admin.index') }}">
                    <img class="round" src="{{ url('admin_files/invoice.png') }}" alt="avatar" height="35" width="35">
                    <h2 class="brand-text mb-0">Invoices</h2>
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
                    <span class="title">@lang('admin.home')</span>
                </a>
            </li>
            <li {{ request()->route()->getName() === 'admin.contacts.index' ? 'class=active' : '' }}>
                <a href="#" class="nav-link">
                    <i class="ficon feather icon-mail"></i>
                    <span class="title">@lang('admin.contacts')</span>
                </a>
            </li>
            <li class="nav-item">
                <a href="#">
                    <i class="feather icon-file"></i>
                    <span class="menu-title">@lang('admin.invoices')</span>
                </a>
                <ul class="menu-content">
                    <li {{ request()->route()->getName() === 'admin.invoices.index' ? 'class=active' : '' }}>
                        <a href="{{ route('admin.invoices.index') }}" class="nav-link">
                            <i class="feather icon-file"></i>
                            <span class="title">@lang('admin.invoices')</span>
                        </a>
                    </li>
                </ul>
            </li>
            <li class="nav-item">
                <a href="#">
                    <i class="feather icon-users"></i>
                    <span class="menu-title">@lang('admin.users')</span>
                </a>
                <ul class="menu-content">
                    <li {{ request()->route()->getName() === 'admin.users.index' ? 'class=active' : '' }}>
                        <a href="#" class="nav-link">
                            <i class="feather icon-users"></i>
                            <span class="title">@lang('admin.users_management')</span>
                        </a>
                    </li>
                </ul>
            </li>
            <li class="nav-item">
                <a href="#">
                    <i class="fa fa-bar-chart"></i>
                    <span class="menu-title">@lang('admin.reports')</span>
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
                <a href="page-account-settings.html">
                    <i class="feather icon-settings"></i>
                    <span class="menu-title">Account Settings</span>
                </a>
            </li>
            <li {{ request()->route()->getName() === 'admin.settings.index' ? 'class=active' : '' }}>
                <a href="#" class="nav-link">
                    <i class="feather icon-settings"></i>
                    <span class="title">@lang('admin.settings')</span>
                </a>
            </li>
        </ul>
    </div>
</div>
<!-- END: Sidebar -->

@include('admin.partials.master')