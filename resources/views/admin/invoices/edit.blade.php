@extends('layouts.admin')

@section('content')

<div class="content-header row">
    <div class="content-header-left col-md-9 col-12 mb-2">
        <div class="row breadcrumbs-top">
            <div class="col-12">
                <h2 class="content-header-title float-left mb-0">@lang('site.create_invoice')</h2>
                <div class="breadcrumb-wrapper col-12">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="/admin">@lang('site.home')</a></li>
                        <li class="breadcrumb-item"><a href="/admin/invoices">@lang('site.invoices')</a></li>
                        <li class="breadcrumb-item active">@lang('site.create_invoice')</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>
</div>

<section id="multiple-column-form">
    <div class="row match-height">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">@lang('site.create_invoice')</h4>
                </div>
                <div class="card-content">
                    <div class="card-body">
                        @include('partials._errors')
                        <form action="{{ route('admin.invoices.store') }}" method="post" enctype="multipart/form-data">
                            @csrf
                            @method('post')
                            <div class="form-body">
                                <div class="row">
                                    <div class="col-md-6 col-12">
                                        <div class="form-group">
                                            <label for="first-name-vertical">First Name</label>
                                            <input type="text" id="first-name-vertical" class="form-control"
                                                name="fname" placeholder="First Name">
                                        </div>
                                        <div class="form-group">
                                            <label for="name" class="control-label col-md-2">@lang('site.first_name')</label>
                                            <div class="col-md-6">
                                                <input type="text" name="first_name" class="form-control"
                                                    value="{{ old('first_name') }}">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-12">
                                        <div class="form-group">
                                            <label for="first-name-vertical">First Name</label>
                                            <input type="text" id="first-name-vertical" class="form-control"
                                                name="fname" placeholder="First Name">
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <button type="submit" class="btn btn-primary mr-1 mb-1">
                                            <i class="feather icon-plus"></i>
                                            @lang('site.add')
                                        </button>
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

@endsection