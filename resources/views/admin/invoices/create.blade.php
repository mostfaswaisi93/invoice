@extends('layouts.admin')
@section('title') {{ trans('admin.create_invoice') }} @endsection

@push('style')

<link rel="stylesheet" href="{{ url('admin_files/files/css/pickadate/classic.css') }}">
<link rel="stylesheet" href="{{ url('admin_files/files/css/pickadate/classic.date.css') }}">
@if (app()->getLocale() == 'ar')
<link rel="stylesheet" href="{{ url('admin_files/files/css/pickadate/rtl.css') }}">
@endif

<style>
    form.form label.error,
    label.error {
        color: red;
        font-style: italic;
    }
</style>

@endpush

@section('content')

<div class="content-header row">
    <div class="content-header-left col-md-9 col-12 mb-2">
        <div class="row breadcrumbs-top">
            <div class="col-12">
                <h2 class="content-header-title float-left mb-0">{{ trans('admin.create_invoice') }}</h2>
                <div class="breadcrumb-wrapper col-12">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="/admin">{{ trans('admin.home') }}</a></li>
                        <li class="breadcrumb-item"><a href="/admin/invoices">{{ trans('admin.invoices') }}</a></li>
                        <li class="breadcrumb-item active">{{ trans('admin.create_invoice') }}</li>
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
                    <h4 class="card-title">{{ trans('admin.create_invoice') }}</h4>
                </div>
                <div class="card-content">
                    <div class="card-body">
                        <form action="{{ route('admin.invoices.store') }}" method="post" class="form">
                            @csrf
                            <div class="form-body">
                                <div class="row">
                                    <div class="col-md-4 col-12">
                                        <div class="form-group">
                                            <label for="customer_name">{{ trans('admin.customer_name') }}</label>
                                            <input type="text" name="customer_name" id="customer_name"
                                                class="form-control" value="{{ old('customer_name') }}"
                                                placeholder="{{ trans('admin.customer_name') }}">
                                            @error('customer_name')<span
                                                class="help-block text-danger">{{ $message }}</span>@enderror
                                        </div>
                                    </div>
                                    <div class="col-md-4 col-12">
                                        <div class="form-group">
                                            <label for="customer_email">{{ trans('admin.customer_email') }}</label>
                                            <input type="text" name="customer_email" id="customer_email"
                                                class="form-control" value="{{ old('customer_email') }}"
                                                placeholder="{{ trans('admin.customer_email') }}">
                                            @error('customer_email')<span
                                                class="help-block text-danger">{{ $message }}</span>@enderror
                                        </div>
                                    </div>
                                    <div class="col-md-4 col-12">
                                        <div class="form-group">
                                            <label for="customer_mobile">{{ trans('admin.customer_mobile') }}</label>
                                            <input type="text" name="customer_mobile" id="customer_mobile"
                                                class="form-control" value="{{ old('customer_mobile') }}"
                                                placeholder="{{ trans('admin.customer_mobile') }}">
                                            @error('customer_mobile')<span
                                                class="help-block text-danger">{{ $message }}</span>@enderror
                                        </div>
                                    </div>
                                    <div class="col-md-4 col-12">
                                        <div class="form-group">
                                            <label for="company_name">{{ trans('admin.company_name') }}</label>
                                            <input type="text" name="company_name" id="company_name"
                                                class="form-control" value="{{ old('company_name') }}"
                                                placeholder="{{ trans('admin.company_name') }}">
                                            @error('company_name')<span
                                                class="help-block text-danger">{{ $message }}</span>@enderror
                                        </div>
                                    </div>
                                    <div class="col-md-4 col-12">
                                        <div class="form-group">
                                            <label for="invoice_number">{{ trans('admin.invoice_number') }}</label>
                                            <input type="text" name="invoice_number" id="invoice_number"
                                                class="form-control" value="{{ old('invoice_number') }}"
                                                placeholder="{{ trans('admin.invoice_number') }}">
                                            @error('invoice_number')<span
                                                class="help-block text-danger">{{ $message }}</span>@enderror
                                        </div>
                                    </div>
                                    <div class="col-md-4 col-12">
                                        <div class="form-group">
                                            <label for="invoice_date">{{ trans('admin.invoice_date') }}</label>
                                            <input type="text" name="invoice_date" id="invoice_date"
                                                class="form-control pickdate" value="{{ old('invoice_date') }}"
                                                placeholder="{{ trans('admin.invoice_date') }}">
                                            @error('invoice_date')<span
                                                class="help-block text-danger">{{ $message }}</span>@enderror
                                        </div>
                                    </div>
                                    <div class="table-responsive">
                                        <table class="table" id="invoice_details">
                                            <thead>
                                                <tr>
                                                    <th></th>
                                                    <th>{{ trans('admin.product_name') }}</th>
                                                    <th>{{ trans('admin.unit') }}</th>
                                                    <th>{{ trans('admin.quantity') }}</th>
                                                    <th>{{ trans('admin.unit_price') }}</th>
                                                    <th>{{ trans('admin.product_subtotal') }}</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr class="cloning_row" id="0">
                                                    <td>#</td>
                                                    <td>
                                                        <input type="text" name="product_name[0]" id="product_name"
                                                            class="product_name form-control">
                                                        @error('product_name')<span
                                                            class="help-block text-danger">{{ $message }}</span>@enderror
                                                    </td>
                                                    <td>
                                                        <select name="unit[0]" id="unit" class="unit form-control">
                                                            <option></option>
                                                            <option value="piece">{{ trans('admin.piece') }}</option>
                                                            <option value="g">{{ trans('admin.gram') }}</option>
                                                            <option value="kg">{{ trans('admin.kilo_gram') }}</option>
                                                        </select>
                                                        @error('unit')<span
                                                            class="help-block text-danger">{{ $message }}</span>@enderror
                                                    </td>
                                                    <td>
                                                        <input type="number" name="quantity[0]" step="0.01"
                                                            id="quantity" class="quantity form-control">
                                                        @error('quantity')<span
                                                            class="help-block text-danger">{{ $message }}</span>@enderror
                                                    </td>
                                                    <td>
                                                        <input type="number" name="unit_price[0]" step="0.01"
                                                            id="unit_price" class="unit_price form-control">
                                                        @error('unit_price')<span
                                                            class="help-block text-danger">{{ $message }}</span>@enderror
                                                    </td>
                                                    <td>
                                                        <input type="number" step="0.01" name="row_sub_total[0]"
                                                            id="row_sub_total" class="row_sub_total form-control"
                                                            readonly="readonly">
                                                        @error('row_sub_total')<span
                                                            class="help-block text-danger">{{ $message }}</span>@enderror
                                                    </td>
                                                </tr>
                                            </tbody>
                                            <tfoot>
                                                <tr>
                                                    <td colspan="6">
                                                        <button type="button"
                                                            class="btn_add btn btn-primary">{{ trans('admin.add_another_product') }}
                                                        </button>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td colspan="3"></td>
                                                    <td colspan="2">{{ trans('admin.sub_total') }}</td>
                                                    <td><input type="number" step="0.01" name="sub_total" id="sub_total"
                                                            class="sub_total form-control" readonly="readonly"></td>
                                                </tr>
                                                <tr>
                                                    <td colspan="3" width="35%"></td>
                                                    <td colspan="2" width="35%">{{ trans('admin.discount') }}</td>
                                                    <td width="30%">
                                                        <div class="input-group mb-3">
                                                            <select name="discount_type" id="discount_type"
                                                                class="discount_type custom-select">
                                                                <option value="fixed">{{ trans('admin.sr') }}</option>
                                                                <option value="percentage">
                                                                    {{ trans('admin.percentage') }}</option>
                                                            </select>
                                                            <div class="input-group-append">
                                                                <input type="number" step="0.01" name="discount_value"
                                                                    id="discount_value"
                                                                    class="discount_value form-control" value="0.00">
                                                            </div>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td colspan="3"></td>
                                                    <td colspan="2">{{ trans('admin.vat') }}</td>
                                                    <td><input type="number" step="0.01" name="vat_value" id="vat_value"
                                                            class="vat_value form-control" readonly="readonly"></td>
                                                </tr>
                                                <tr>
                                                    <td colspan="3"></td>
                                                    <td colspan="2">{{ trans('admin.shipping') }}</td>
                                                    <td><input type="number" step="0.01" name="shipping" id="shipping"
                                                            class="shipping form-control"></td>
                                                </tr>
                                                <tr>
                                                    <td colspan="3"></td>
                                                    <td colspan="2">{{ trans('admin.total_due') }}</td>
                                                    <td><input type="number" step="0.01" name="total_due" id="total_due"
                                                            class="total_due form-control" readonly="readonly"></td>
                                                </tr>
                                            </tfoot>
                                        </table>
                                    </div>
                                    <div class="text-right pt-3 col-12">
                                        <button type="submit" name="save" class="btn btn-primary">
                                            {{ trans('admin.save') }}
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

@push('scripts')

<script src="{{ url('admin_files/files/js/form_validation/jquery.form.js') }}"></script>
<script src="{{ url('admin_files/files/js/form_validation/jquery.validate.min.js') }}"></script>
<script src="{{ url('admin_files/files/js/form_validation/additional-methods.min.js') }}"></script>
<script src="{{ url('admin_files/files/js/pickadate/picker.js') }}"></script>
<script src="{{ url('admin_files/files/js/pickadate/picker.date.js') }}"></script>
@if (app()->getLocale() == 'ar')
<script src="{{ url('admin_files/files/js/form_validation/messages_ar.js') }}"></script>
<script src="{{ url('admin_files/files/js/pickadate/ar.js') }}"></script>
@endif
<script src="{{ url('admin_files/files/js/custom.js') }}"></script>

@endpush