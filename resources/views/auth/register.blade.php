<!DOCTYPE html>
<html class="loading" lang="en" data-textdirection="rtl">
<!-- BEGIN: Head-->

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta name="description"
        content="Vuexy admin is super flexible, powerful, clean &amp; modern responsive bootstrap 4 admin template with unlimited possibilities.">
    <meta name="keywords"
        content="admin template, Vuexy admin template, dashboard template, flat admin template, responsive admin template, web app">
    <meta name="author" content="PIXINVENT">
    <title>{{ trans('admin.invoice') }} | {{ trans('admin.register') }}</title>
    <link rel="apple-touch-icon" href="{{ url('admin_files/app-assets/images/ico/apple-icon-120.png') }}">
    <link rel="shortcut icon" type="image/x-icon" href="{{ url('admin_files/app-assets/images/ico/favicon.ico') }}">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:300,400,500,600" rel="stylesheet">

    <!-- BEGIN: Vendor CSS-->
    <link rel="stylesheet" type="text/css" href="{{ url('admin_files/app-assets/vendors/css/vendors-rtl.min.css') }}">
    <!-- END: Vendor CSS-->

    <!-- BEGIN: Theme CSS-->
    <link rel="stylesheet" type="text/css" href="{{ url('admin_files/app-assets/css-rtl/bootstrap.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ url('admin_files/app-assets/css-rtl/bootstrap-extended.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ url('admin_files/app-assets/css-rtl/colors.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ url('admin_files/app-assets/css-rtl/components.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ url('admin_files/app-assets/css-rtl/themes/dark-layout.css') }}">
    <link rel="stylesheet" type="text/css"
        href="{{ url('admin_files/app-assets/css-rtl/themes/semi-dark-layout.css') }}">

    <!-- BEGIN: Page CSS-->
    <link rel="stylesheet" type="text/css"
        href="{{ url('admin_files/app-assets/css-rtl/core/menu/menu-types/vertical-menu.css') }}">
    <link rel="stylesheet" type="text/css"
        href="{{ url('admin_files/app-assets/css-rtl/core/colors/palette-gradient.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ url('admin_files/app-assets/css-rtl/pages/authentication.css') }}">
    <!-- END: Page CSS-->

    <!-- BEGIN: Custom CSS-->
    <link rel="stylesheet" type="text/css" href="{{ url('admin_files/app-assets/css-rtl/custom-rtl.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ url('admin_files/assets/css/style-rtl.css') }}">
    <!-- END: Custom CSS-->

</head>
<!-- END: Head-->

<!-- BEGIN: Body-->

<body
    class="vertical-layout vertical-menu-modern semi-dark-layout 1-column  navbar-floating footer-static bg-full-screen-image  blank-page blank-page"
    data-open="click" data-menu="vertical-menu-modern" data-col="1-column" data-layout="semi-dark-layout">
    <!-- BEGIN: Content-->
    <div class="app-content content">
        <div class="content-overlay"></div>
        <div class="header-navbar-shadow"></div>
        <div class="content-wrapper">
            <div class="content-header row">
            </div>
            <div class="content-body">
                <section class="row flexbox-container">
                    <div class="col-xl-8 col-10 d-flex justify-content-center">
                        <div class="card bg-authentication rounded-0 mb-0">
                            <div class="row m-0">
                                <div class="col-lg-6 d-lg-block d-none text-center align-self-center pl-0 pr-3 py-0">
                                    <img src="{{ url('admin_files/app-assets/images/pages/register.jpg') }}"
                                        alt="branding logo">
                                </div>
                                <div class="col-lg-6 col-12 p-0">
                                    <div class="card rounded-0 mb-0 p-2">
                                        <div class="card-header pt-50 pb-1">
                                            <div class="card-title">
                                                <h4 class="mb-0">{{ trans('admin.create_account') }}</h4>
                                            </div>
                                        </div>
                                        <p class="px-2">{{ trans('admin.register_msg') }}</p>
                                        <div class="card-content">
                                            <div class="card-body pt-0">
                                                <form action="index.html">
                                                    <div class="form-label-group">
                                                        <input type="text" id="name" name="name" class="form-control"
                                                            placeholder="{{ trans('admin.name') }}" required>
                                                        <label for="name">{{ trans('admin.name') }}</label>
                                                    </div>
                                                    <div class="form-label-group">
                                                        <input type="text" name="username" id="username"
                                                            class="form-control"
                                                            placeholder="{{ trans('admin.username') }}" required>
                                                        <label for="username">{{ trans('admin.username') }}</label>
                                                    </div>
                                                    <div class="form-label-group">
                                                        <input type="email" name="email" id="email" class="form-control"
                                                            placeholder="{{ trans('admin.email') }}" required>
                                                        <label for="email">{{ trans('admin.email') }}</label>
                                                    </div>
                                                    <div class="form-label-group">
                                                        <input type="password" name="password" id="password"
                                                            class="form-control"
                                                            placeholder="{{ trans('admin.password') }}" required>
                                                        <label for="password">{{ trans('admin.password') }}</label>
                                                    </div>
                                                    <div class="form-label-group">
                                                        <input type="password" name="password_confirmation"
                                                            id="password_confirmation" class="form-control"
                                                            placeholder="{{ trans('admin.password_confirmation') }}"
                                                            required>
                                                        <label
                                                            for="password_confirmation">{{ trans('admin.password_confirmation') }}</label>
                                                    </div>
                                                    <a href="{{ route('login') }}"
                                                        class="btn btn-outline-primary float-left btn-inline mb-50">{{ trans('admin.login') }}</a>
                                                    <button type="submit"
                                                        class="btn btn-primary float-right btn-inline mb-50">{{ trans('admin.register') }}</a>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
        </div>
    </div>
    <!-- END: Content-->


    <!-- BEGIN: Vendor JS-->
    <script src="{{ url('admin_files/app-assets/vendors/js/vendors.min.js') }}"></script>
    <!-- BEGIN Vendor JS-->

    <!-- BEGIN: Page Vendor JS-->
    <!-- END: Page Vendor JS-->

    <!-- BEGIN: Theme JS-->
    <script src="{{ url('admin_files/app-assets/js/core/app-menu.js') }}"></script>
    <script src="{{ url('admin_files/app-assets/js/core/app.js') }}"></script>
    <script src="{{ url('admin_files/app-assets/js/scripts/components.js') }}"></script>
    <!-- END: Theme JS-->

    <!-- BEGIN: Page JS-->
    <!-- END: Page JS-->

</body>
<!-- END: Body-->

</html>