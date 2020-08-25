@extends('layouts.admin')
@section('title') @lang('admin.edit_user') @endsection

@section('content')

<div class="content-header row">
    <div class="content-header-left col-md-9 col-12 mb-2">
        <div class="row breadcrumbs-top">
            <div class="col-12">
                <h2 class="content-header-title float-left mb-0">@lang('admin.edit_user')</h2>
                <div class="breadcrumb-wrapper col-12">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item">
                            <a href="{{ route('admin.index') }}">@lang('admin.home')</a>
                        </li>
                        <li class="breadcrumb-item">
                            <a href="{{ route('admin.users.index') }}">@lang('admin.users_management')</a>
                        </li>
                        <li class="breadcrumb-item active">@lang('admin.edit_user')</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="content-body">
    <section class="portlet">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">
                            <i class="feather icon-edit mr-25"></i>
                            @lang('admin.edit_user') - {{ $user->name }}
                        </h4>
                    </div>
                    <div class="card-content">
                        <div class="card-body">
                            @include('partials._errors')
                            <form action="{{ route('admin.users.update', $user->id) }}" method="post"
                                enctype="multipart/form-data">
                                @csrf
                                @method('PUT')
                                <div class="row">
                                    <div class="col-md-4 col-12">
                                        <div class="form-group">
                                            <div class="controls">
                                                <label>@lang('admin.name')</label>
                                                <input id="name" type="text" name="name" class="form-control"
                                                    value="{{ $user->name }}" placeholder="@lang('admin.name')">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4 col-12">
                                        <div class="form-group">
                                            <div class="controls">
                                                <label>@lang('admin.username')</label>
                                                <input id="username" type="text" name="username" class="form-control"
                                                    value="{{ $user->username }}" placeholder="@lang('admin.username')">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4 col-12">
                                        <div class="form-group">
                                            <div class="controls">
                                                <label>@lang('admin.email')</label>
                                                <input id="email" type="email" name="email" class="form-control"
                                                    value="{{ $user->email }}" placeholder="@lang('admin.email')">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="media mb-2">
                                            <a class="mr-2 my-25" href="#">
                                                <img src="{{ $user->image_path }}" alt="users avatar"
                                                    class="users-avatar-shadow rounded image img-thumbnail image-preview"
                                                    height="70" width="70">
                                            </a>
                                            <div class="media-body mt-50">
                                                <label>@lang('admin.user_image')</label>
                                                <div class="col-4 d-flex mt-1 px-0">
                                                    <input type="file" class="form-control-file image" name="image"
                                                        id="image" style="display:none;">
                                                    <button class="btn btn-primary" onclick="FileUpload();">
                                                        <i class="fa fa-plus"></i>
                                                        @lang('admin.file_upload')
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="table-responsive border rounded px-1">
                                            <h6 class="border-bottom py-1 mx-1 mb-0 font-medium-2">
                                                <i class="feather icon-lock mr-50"></i>
                                                @lang('admin.permissions')
                                            </h6> <br>
                                            @php
                                            $models = ['users', 'categories', 'items', 'countries', 'cities',
                                            'locations', 'languages'];
                                            $maps = ['create', 'read', 'update', 'delete'];
                                            @endphp
                                            <table class="table table-borderless">
                                                <thead>
                                                    <tr>
                                                        <th>@lang('admin.module')</th>
                                                        @foreach ($maps as $map)
                                                        <th>
                                                            @lang('admin.' .$map)
                                                        </th>
                                                        @endforeach
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    @foreach ($models as $index => $model)
                                                    <tr>
                                                        <td> @lang('admin.' .$model)</td>
                                                        @foreach ($maps as $map)
                                                        <td>
                                                            <div class="vs-checkbox-con vs-checkbox-primary">
                                                                <input type="checkbox" name="permissions[]"
                                                                    {{ $user->hasPermission($map . '_' . $model) ? 'checked' : '' }}
                                                                    value="{{ $map . '_' . $model }}">
                                                                <span class="vs-checkbox">
                                                                    <span class="vs-checkbox--check">
                                                                        <i class="vs-icon feather icon-check"></i>
                                                                    </span>
                                                                </span>
                                                            </div>
                                                        </td>
                                                        @endforeach
                                                    </tr>
                                                    @endforeach
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <hr>
                                    </div>
                                    <div class="col-md-6 col-12">
                                        <div class="form-group">
                                            <div class="controls">
                                                <button type="submit" class="btn btn-primary">
                                                    @lang('admin.edit')
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <!-- left menu section -->
                                    <div class="col-md-3 mb-2 mb-md-0">
                                        <ul class="nav nav-pills flex-column mt-md-0 mt-1">
                                            <li class="nav-item">
                                                <a class="nav-link d-flex py-75 active" id="account-pill-general"
                                                    data-toggle="pill" href="#account-vertical-general"
                                                    aria-expanded="true">
                                                    <i class="feather icon-globe mr-50 font-medium-3"></i>
                                                    General
                                                </a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link d-flex py-75" id="account-pill-password"
                                                    data-toggle="pill" href="#account-vertical-password"
                                                    aria-expanded="false">
                                                    <i class="feather icon-lock mr-50 font-medium-3"></i>
                                                    Change Password
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
                                                        <div role="tabpanel" class="tab-pane active"
                                                            id="account-vertical-general"
                                                            aria-labelledby="account-pill-general" aria-expanded="true">
                                                            <div class="media">
                                                                <a href="javascript: void(0);">
                                                                    <img src="../../../app-assets/images/portrait/small/avatar-s-12.jpg"
                                                                        class="rounded mr-75" alt="profile image"
                                                                        height="64" width="64">
                                                                </a>
                                                                <div class="media-body mt-75">
                                                                    <div
                                                                        class="col-12 px-0 d-flex flex-sm-row flex-column justify-content-start">
                                                                        <label
                                                                            class="btn btn-sm btn-primary ml-50 mb-50 mb-sm-0 cursor-pointer"
                                                                            for="account-upload">Upload new
                                                                            photo</label>
                                                                        <input type="file" id="account-upload" hidden>
                                                                        <button
                                                                            class="btn btn-sm btn-outline-warning ml-50">Reset</button>
                                                                    </div>
                                                                    <p class="text-muted ml-75 mt-50"><small>Allowed
                                                                            JPG, GIF or PNG. Max
                                                                            size of
                                                                            800kB</small></p>
                                                                </div>
                                                            </div>
                                                            <hr>
                                                            <form novalidate>
                                                                <div class="row">
                                                                    <div class="col-12">
                                                                        <div class="form-group">
                                                                            <div class="controls">
                                                                                <label
                                                                                    for="account-username">Username</label>
                                                                                <input type="text" class="form-control"
                                                                                    id="account-username"
                                                                                    placeholder="Username"
                                                                                    value="hermione007" required
                                                                                    data-validation-required-message="This username field is required">
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-12">
                                                                        <div class="form-group">
                                                                            <div class="controls">
                                                                                <label for="account-name">Name</label>
                                                                                <input type="text" class="form-control"
                                                                                    id="account-name" placeholder="Name"
                                                                                    value="Hermione Granger" required
                                                                                    data-validation-required-message="This name field is required">
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-12">
                                                                        <div class="form-group">
                                                                            <div class="controls">
                                                                                <label
                                                                                    for="account-e-mail">E-mail</label>
                                                                                <input type="email" class="form-control"
                                                                                    id="account-e-mail"
                                                                                    placeholder="Email"
                                                                                    value="granger007@hogward.com"
                                                                                    required
                                                                                    data-validation-required-message="This email field is required">
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-12">
                                                                        <div class="alert alert-warning alert-dismissible mb-2"
                                                                            role="alert">
                                                                            <button type="button" class="close"
                                                                                data-dismiss="alert" aria-label="Close">
                                                                                <span aria-hidden="true">×</span>
                                                                            </button>
                                                                            <p class="mb-0">
                                                                                Your email is not confirmed. Please
                                                                                check your inbox.
                                                                            </p>
                                                                            <a href="javascript: void(0);">Resend
                                                                                confirmation</a>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-12">
                                                                        <div class="form-group">
                                                                            <label for="account-company">Company</label>
                                                                            <input type="text" class="form-control"
                                                                                id="account-company"
                                                                                placeholder="Company name">
                                                                        </div>
                                                                    </div>
                                                                    <div
                                                                        class="col-12 d-flex flex-sm-row flex-column justify-content-end">
                                                                        <button type="submit"
                                                                            class="btn btn-primary mr-sm-1 mb-1 mb-sm-0">Save
                                                                            changes</button>
                                                                        <button type="reset"
                                                                            class="btn btn-outline-warning">Cancel</button>
                                                                    </div>
                                                                </div>
                                                            </form>
                                                        </div>
                                                        <div class="tab-pane fade " id="account-vertical-password"
                                                            role="tabpanel" aria-labelledby="account-pill-password"
                                                            aria-expanded="false">
                                                            <form novalidate>
                                                                <div class="row">
                                                                    <div class="col-12">
                                                                        <div class="form-group">
                                                                            <div class="controls">
                                                                                <label for="account-old-password">Old
                                                                                    Password</label>
                                                                                <input type="password"
                                                                                    class="form-control"
                                                                                    id="account-old-password" required
                                                                                    placeholder="Old Password"
                                                                                    data-validation-required-message="This old password field is required">
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-12">
                                                                        <div class="form-group">
                                                                            <div class="controls">
                                                                                <label for="account-new-password">New
                                                                                    Password</label>
                                                                                <input type="password" name="password"
                                                                                    id="account-new-password"
                                                                                    class="form-control"
                                                                                    placeholder="New Password" required
                                                                                    data-validation-required-message="The password field is required"
                                                                                    minlength="6">
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-12">
                                                                        <div class="form-group">
                                                                            <div class="controls">
                                                                                <label
                                                                                    for="account-retype-new-password">Retype
                                                                                    New
                                                                                    Password</label>
                                                                                <input type="password"
                                                                                    name="con-password"
                                                                                    class="form-control" required
                                                                                    id="account-retype-new-password"
                                                                                    data-validation-match-match="password"
                                                                                    placeholder="New Password"
                                                                                    data-validation-required-message="The Confirm password field is required"
                                                                                    minlength="6">
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div
                                                                        class="col-12 d-flex flex-sm-row flex-column justify-content-end">
                                                                        <button type="submit"
                                                                            class="btn btn-primary mr-sm-1 mb-1 mb-sm-0">Save
                                                                            changes</button>
                                                                        <button type="reset"
                                                                            class="btn btn-outline-warning">Cancel</button>
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
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>

@endsection