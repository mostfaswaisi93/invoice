<!-- BEGIN: Menu -->
<nav class="header-navbar navbar-expand-lg navbar navbar-with-menu floating-nav navbar-light navbar-shadow">
    <div class="navbar-wrapper">
        <div class="navbar-container content">
            <div class="navbar-collapse" id="navbar-mobile">
                <div class="mr-auto float-left bookmark-wrapper d-flex align-items-center">
                    <ul class="nav navbar-nav">
                        <li class="nav-item mobile-menu d-xl-none mr-auto">
                            <a class="nav-link nav-menu-main menu-toggle hidden-xs" href="#">
                                <i class="ficon feather icon-menu"></i>
                            </a>
                        </li>
                    </ul>
                </div>
                <ul class="nav navbar-nav float-right">
                    <li class="dropdown dropdown-language nav-item">
                        @if(app()->getLocale() == 'en')
                        <a class="dropdown-toggle nav-link" id="dropdown-flag" href="#" data-toggle="dropdown"
                            aria-haspopup="true" aria-expanded="false">
                            <i class="flag-icon flag-icon-us"></i><span class="selected-language">English</span></a>
                        @else
                        <a class="dropdown-toggle nav-link" id="dropdown-flag" href="#" data-toggle="dropdown"
                            aria-haspopup="true" aria-expanded="false">
                            <i class="flag-icon flag-icon-sa"></i><span class="selected-language">العربية</span></a>
                        @endif
                        <div class="dropdown-menu" aria-labelledby="dropdown-flag">
                            @foreach(LaravelLocalization::getSupportedLocales() as $localeCode => $properties)
                            @if($localeCode == LaravelLocalization::getCurrentLocale())
                            <a class="dropdown-item" rel="alternate" hreflang="{{ $localeCode }}"
                                href="{{ LaravelLocalization::getLocalizedURL($localeCode, null, [], true) }}">
                                @if(app()->getLocale() == 'en')
                                <i class="flag-icon flag-icon-us"></i>
                                @else
                                <i class="flag-icon flag-icon-sa"></i>
                                @endif
                                {{ $properties['native'] }}
                            </a>
                            @elseif($url = LaravelLocalization::getLocalizedURL($localeCode))
                            <a class="dropdown-item" rel="alternate" hreflang="{{ $localeCode }}"
                                href="{{ LaravelLocalization::getLocalizedURL($localeCode, null, [], true) }}">
                                @if(app()->getLocale() == 'en')
                                <i class="flag-icon flag-icon-sa"></i>
                                @else
                                <i class="flag-icon flag-icon-us"></i>
                                @endif
                                {{ $properties['native'] }}
                            </a>
                            @endif
                            @endforeach
                        </div>
                    </li>
                    <li class="dropdown dropdown-user nav-item">
                        <a class="dropdown-toggle nav-link dropdown-user-link" href="#" data-toggle="dropdown">
                            <div class="user-nav d-sm-flex d-none">
                                <span class="user-name text-bold-600">
                                    {{ auth()->user()->name }}
                                </span>
                                <span class="user-status">{{ trans('admin.available') }}</span>
                            </div>
                            <span class="avatar">
                                <img class="round"
                                    src="{{ url('admin_files/app-assets/images/portrait/small/avatar-s-11.jpg') }}"
                                    alt="avatar" height="40" width="40">
                                <span class="avatar-status-online avatar-status-lg"></span>
                            </span>
                        </a>
                        {{-- <div class="dropdown-menu dropdown-menu-right">
                            <a class="dropdown-item" href="page-user-profile.html">
                                <i class="feather icon-user"></i>
                                Edit Profile
                            </a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                            document.getElementById('logout-form').submit();">
                                <i class="feather icon-power"></i> {{ trans('admin.logout') }}
                            </a>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                @csrf
                            </form>
                        </div> --}}
                    </li>
                </ul>
            </div>
        </div>
    </div>
</nav>
<!-- END: Menu -->