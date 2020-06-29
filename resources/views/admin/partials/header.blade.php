<!DOCTYPE html>
{{-- <html class="loading" lang="en" data-textdirection="ltr"> --}}
<html class="loading" dir="{{ LaravelLocalization::getCurrentLocaleDirection() }}">

<!-- BEGIN: Head-->
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta name="description" content="BMS Laravel Project">
    <meta name="keywords" content="BMS Laravel Project">
    <meta name="author" content="PIXINVENT">
    <title>BMS</title>

    <link rel="apple-touch-icon" href="{{ url('admin_files/app-assets/images/ico/apple-icon-120.png') }}">
    <link rel="shortcut icon" type="image/x-icon" href="{{ url('admin_files/app-assets/images/ico/favicon.ico') }}">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:300,400,500,600" rel="stylesheet">

    @if (app()->getLocale() == 'en')

    <!-- BEGIN: Vendor CSS-->
    <link rel="stylesheet" type="text/css" href="{{ url('admin_files/app-assets/vendors/css/vendors.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ url('admin_files/app-assets/vendors/css/tables/datatable/datatables.min.css') }}">
    <!-- END: Vendor CSS-->

    <!-- BEGIN: Theme CSS-->
    <link rel="stylesheet" type="text/css" href="{{ url('admin_files/app-assets/css/bootstrap.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ url('admin_files/app-assets/css/bootstrap-extended.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ url('admin_files/app-assets/css/colors.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ url('admin_files/app-assets/css/components.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ url('admin_files/app-assets/css/themes/dark-layout.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ url('admin_files/app-assets/css/themes/semi-dark-layout.css') }}">

    <!-- BEGIN: Page CSS-->
    <link rel="stylesheet" type="text/css" href="{{ url('admin_files/app-assets/css/core/menu/menu-types/vertical-menu.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ url('admin_files/app-assets/css/core/colors/palette-gradient.css') }}">
    <!-- END: Page CSS-->

    <!-- BEGIN: Custom CSS-->
    <link rel="stylesheet" type="text/css" href="{{ url('admin_files/assets/css/style.css') }}">
    <!-- END: Custom CSS-->

    @else

    {{-- <link href="https://fonts.googleapis.com/css?family=Cairo:400,700" rel="stylesheet">

    <style>
        body, h1, h2, h3, h4, h5, h6 {
            font-family: 'Cairo', sans-serif !important;
        }
    </style> --}}

    <!-- BEGIN: Vendor CSS-->
    <link rel="stylesheet" type="text/css" href="{{ url('admin_files/app-assets/vendors/css/vendors-rtl.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ url('admin_files/app-assets/vendors/css/tables/datatable/datatables.min.css') }}">
    <!-- END: Vendor CSS-->
    
    <!-- BEGIN: Theme CSS-->
    <link rel="stylesheet" type="text/css" href="{{ url('admin_files/app-assets/css-rtl/bootstrap.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ url('admin_files/app-assets/css-rtl/bootstrap-extended.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ url('admin_files/app-assets/css-rtl/colors.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ url('admin_files/app-assets/css-rtl/components.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ url('admin_files/app-assets/css-rtl/themes/dark-layout.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ url('admin_files/app-assets/css-rtl/themes/semi-dark-layout.css') }}">
    
    <!-- BEGIN: Page CSS-->
    <link rel="stylesheet" type="text/css" href="{{ url('admin_files/app-assets/css-rtl/core/menu/menu-types/vertical-menu.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ url('admin_files/app-assets/css-rtl/core/colors/palette-gradient.css') }}">
    <!-- END: Page CSS-->
    
    <!-- BEGIN: Custom CSS-->
    <link rel="stylesheet" type="text/css" href="{{ url('admin_files/app-assets/css-rtl/custom-rtl.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ url('admin_files/assets/css/style-rtl.css') }}">
    <!-- END: Custom CSS-->
        
    @endif

</head>
<!-- END: Head-->

<!-- BEGIN: Body-->
<body class="vertical-layout vertical-menu-modern semi-dark-layout 2-columns navbar-floating footer-static"
    data-open="click" data-menu="vertical-menu-modern" data-col="2-columns" data-layout="semi-dark-layout">