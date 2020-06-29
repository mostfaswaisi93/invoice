@extends('layouts.admin')

@section('content')

<div class="content-header row">
    <div class="content-header-left col-md-9 col-12 mb-2">
        <div class="row breadcrumbs-top">
            <div class="col-12">
                <h2 class="content-header-title float-left mb-0">@lang('site.settings')</h2>
                <div class="breadcrumb-wrapper col-12">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{ route('admin.index') }}">@lang('site.dashboard')</a>
                        </li>
                        <li class="breadcrumb-item active"> @lang('site.settings')
                        </li>
                    </ol>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="content-body">
    <!-- settings page start -->
    <section id="page-account-settings">
        <div class="row">
            <!-- left menu section -->
            <div class="col-md-3 mb-2 mb-md-0">
                <ul class="nav nav-pills flex-column mt-md-0 mt-1">
                    <li class="nav-item">
                        <a class="nav-link d-flex py-75 active" id="account-pill-general" data-toggle="pill"
                            href="#account-vertical-general" aria-expanded="true">
                            <i class="feather icon-globe mr-50 font-medium-3"></i>
                            @lang('site.general')
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link d-flex py-75" id="account-pill-password" data-toggle="pill"
                            href="#account-vertical-password" aria-expanded="false">
                            <i class="feather icon-lock mr-50 font-medium-3"></i>
                             @lang('site.change_password')
                        </a>
                    </li>
                </ul>
            </div>
            <!-- right content section -->
            <div class="col-md-9">
                <div class="card">
                    <div class="card-content">
                        <div class="card-body">
                            <div class="tab-content">
                                <div role="tabpanel" class="tab-pane active" id="account-vertical-general"
                                    aria-labelledby="account-pill-general" aria-expanded="false">
                                    <div class="media">
                                        <a href="javascript: void(0);">
                                            <img src="{{ url('admin_files/app-assets/images/portrait/small/avatar-s-17.jpg') }}"
                                                class="rounded mr-75" alt="profile image" height="64" width="64">
                                        </a>
                                        <div class="media-body mt-75">
                                            <div
                                                class="col-12 px-0 d-flex flex-sm-row flex-column justify-content-start">
                                                <label class="btn btn-sm btn-primary ml-50 mb-50 mb-sm-0 cursor-pointer"
                                                    for="account-upload">Upload new photo</label>
                                                <input type="file" id="account-upload" hidden>
                                                <button class="btn btn-sm btn-outline-warning ml-50">Reset</button>
                                            </div>
                                            <p class="text-muted ml-75 mt-50"><small>Allowed JPG, GIF or PNG. Max
                                                    size of
                                                    800kB</small></p>
                                        </div>
                                    </div>
                                    <hr>
                                    @include('partials._errors')
                                    <form action="" method="post" enctype="multipart/form-data">
                                        @csrf
                                        @method('put')
                                        <div class="row">
                                            <div class="col-12">
                                                <div class="form-group">
                                                    <div class="controls">
                                                        <label for="account-username">Username</label>
                                                        <input type="text" class="form-control" id="account-username"
                                                            placeholder="Username" required>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-12">
                                                <div class="form-group">
                                                    <div class="controls">
                                                        <label for="account-name">Full Name</label>
                                                        <input type="text" class="form-control" id="account-name"
                                                            placeholder="Name" required>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-12">
                                                <div class="form-group">
                                                    <div class="controls">
                                                        <label for="account-e-mail">E-mail</label>
                                                        <input type="email" class="form-control" id="account-e-mail"
                                                            placeholder="Email" required>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-12 d-flex flex-sm-row flex-column justify-content-end">
                                                <button type="submit" class="btn btn-primary mr-sm-1 mb-1 mb-sm-0">Save
                                                    changes</button>
                                                <button type="reset" class="btn btn-outline-warning">Cancel</button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                                <div class="tab-pane fade " id="account-vertical-password" role="tabpanel"
                                    aria-labelledby="account-pill-password" aria-expanded="false">
                                    @include('partials._errors')
                                    <form action="#" method="POST">
                                        @csrf
                                        @method('post')
                                        <div class="row">
                                            <div class="col-12">
                                                <div class="form-group">
                                                    <div class="controls">
                                                        <label for="account-old-password">Old Password</label>
                                                        <input type="password" class="form-control"
                                                            id="account-old-password" 
                                                            placeholder="Old Password"
                                                            >
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-12">
                                                <div class="form-group">
                                                    <div class="controls">
                                                        <label for="account-new-password">New Password</label>
                                                        <input type="password" name="password" id="account-new-password"
                                                            class="form-control" placeholder="New Password" 
                                                            >
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-12">
                                                <div class="form-group">
                                                    <div class="controls">
                                                        <label for="account-retype-new-password">Retype New
                                                            Password</label>
                                                        <input type="password" name="con-password" class="form-control"
                                                             id="account-retype-new-password"
                                                            data-validation-match-match="password"
                                                            placeholder="New Password"
                                                            >
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-12 d-flex flex-sm-row flex-column justify-content-end">
                                                <button type="submit" class="btn btn-primary mr-sm-1 mb-1 mb-sm-0">Save
                                                    changes</button>
                                                <button type="reset" class="btn btn-outline-warning">Cancel</button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- settings page end -->
</div>

@endsection