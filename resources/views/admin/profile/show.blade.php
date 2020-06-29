@extends('layouts.admin')

@section('content')

<div class="content-header row">
    <div class="content-header-left col-md-9 col-12 mb-2">
        <div class="row breadcrumbs-top">
            <div class="col-12">
                <h2 class="content-header-title float-left mb-0">@lang('site.profile')</h2>
                <div class="breadcrumb-wrapper col-12">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{ route('admin.index') }}">@lang('site.dashboard')</a>
                        </li>
                        <li class="breadcrumb-item active"> @lang('site.profile')
                        </li>
                    </ol>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="content-body">
    <!-- page users view start -->
    <section class="page-users-view">
        <div class="row">
            <!-- Profile start -->
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <div class="card-title">@lang('site.profile')</div>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="users-view-image">
                                <img src="{{ asset('uploads/profile_images/default.jpg') }}"
                                    class="users-avatar-shadow w-100 rounded mb-2 pr-2 ml-1" alt="avatar">
                            </div>
                            <div class="col-12 col-sm-9 col-md-6 col-lg-5">
                                <table>
                                    <tr>
                                        <td class="font-weight-bold" width="60%">
                                            <div>@lang('site.username')</div> <br>
                                            <div>@lang('site.full_name')</div> <br>
                                            <div>@lang('site.email')</div> <br>
                                            <div>@lang('site.phone')</div> <br>
                                            <div>@lang('site.updated_at')</div> <br>
                                        </td>
                                        <td>
                                            <div>{{ auth()->user()->username }}</div> <br>
                                            <div>{{ auth()->user()->full_name }}</div> <br>
                                            <div>{{ auth()->user()->email }}</div> <br>
                                            <div>{{ auth()->user()->phone }}</div> <br>
                                            <div>{{ auth()->user()->updated_at->format('d-m-Y') }}</div> <br>
                                        </td>
                                    </tr>
                                </table>
                            </div>
                            <div class="col-12">
                                <a href="\admin\settings" class="btn btn-primary mr-1">
                                    <i class="feather icon-edit-1"></i> @lang('site.edit')
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Profile end -->
        </div>
    </section>
    <!-- page users view end -->
</div>

@endsection