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
                                    <div class="col-md-4 col-12">
                                        <div class="form-group">
                                            <label for="customer_name">@lang('site.customer_name')</label>
                                            <input type="text" name="customer_name" id="customer_name"
                                                class="form-control" value="{{ old('customer_name') }}"
                                                placeholder="@lang('site.customer_name')">
                                        </div>
                                    </div>
                                    <div class="col-md-4 col-12">
                                        <div class="form-group">
                                            <label for="customer_email">@lang('site.customer_email')</label>
                                            <input type="text" name="customer_email" id="customer_email"
                                                class="form-control" value="{{ old('customer_email') }}"
                                                placeholder="@lang('site.customer_email')">
                                        </div>
                                    </div>
                                    <div class="col-md-4 col-12">
                                        <div class="form-group">
                                            <label for="customer_mobile">@lang('site.customer_mobile')</label>
                                            <input type="text" name="customer_mobile" id="customer_mobile"
                                                class="form-control" value="{{ old('customer_mobile') }}"
                                                placeholder="@lang('site.customer_mobile')">
                                        </div>
                                    </div>
                                    <div class="col-md-4 col-12">
                                        <div class="form-group">
                                            <label for="company_name">@lang('site.company_name')</label>
                                            <input type="text" name="company_name" id="company_name"
                                                class="form-control" value="{{ old('company_name') }}"
                                                placeholder="@lang('site.company_name')">
                                        </div>
                                    </div>
                                    <div class="col-md-4 col-12">
                                        <div class="form-group">
                                            <label for="invoice_number">@lang('site.invoice_number')</label>
                                            <input type="text" name="invoice_number" id="invoice_number"
                                                class="form-control" value="{{ old('invoice_number') }}"
                                                placeholder="@lang('site.invoice_number')">
                                        </div>
                                    </div>
                                    <div class="col-md-4 col-12">
                                        <div class="form-group">
                                            <label for="invoice_date">@lang('site.invoice_date')</label>
                                            <input type="text" name="invoice_date" id="invoice_date"
                                                class="form-control" value="{{ old('invoice_date') }}"
                                                placeholder="@lang('site.invoice_date')">
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