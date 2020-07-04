@extends('layouts.admin')

@section('content')

<div class="content-header row">
    <div class="content-header-left col-md-9 col-12 mb-2">
        <div class="row breadcrumbs-top">
            <div class="col-12">
                <h2 class="content-header-title float-left mb-0">@lang('site.edit_invoice')</h2>
                <div class="breadcrumb-wrapper col-12">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="/admin">@lang('site.home')</a></li>
                        <li class="breadcrumb-item"><a href="/admin/invoices">@lang('site.invoices')</a></li>
                        <li class="breadcrumb-item active">@lang('site.edit_invoice')</li>
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
                    <h4 class="card-title">@lang('site.edit_invoice')</h4>
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
                                    <div class="table-responsive">
                                        <table class="table" id="invoice_details">
                                            <thead>
                                                <tr>
                                                    <th></th>
                                                    <th>@lang('site.product_name')</th>
                                                    <th>@lang('site.unit')</th>
                                                    <th>@lang('site.quantity')</th>
                                                    <th>@lang('site.unit_price')</th>
                                                    <th>@lang('site.product_subtotal')</th>
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
                                                            <option value="piece">@lang('site.piece')</option>
                                                            <option value="g">@lang('site.gram')</option>
                                                            <option value="kg">@lang('site.kilo_gram')</option>
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
                                                            class="btn_add btn btn-primary">@lang('site.add_another_product')</button>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td colspan="3"></td>
                                                    <td colspan="2">@lang('site.sub_total')</td>
                                                    <td><input type="number" step="0.01" name="sub_total" id="sub_total"
                                                            class="sub_total form-control" readonly="readonly"></td>
                                                </tr>
                                                <tr>
                                                    <td colspan="3"></td>
                                                    <td colspan="2">@lang('site.discount')</td>
                                                    <td>
                                                        <div class="input-group mb-3">
                                                            <select name="discount_type" id="discount_type"
                                                                class="discount_type custom-select">
                                                                <option value="fixed">@lang('site.sr')</option>
                                                                <option value="percentage">@lang('site.percentage')
                                                                </option>
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
                                                    <td colspan="2">@lang('site.vat')</td>
                                                    <td><input type="number" step="0.01" name="vat_value" id="vat_value"
                                                            class="vat_value form-control" readonly="readonly"></td>
                                                </tr>
                                                <tr>
                                                    <td colspan="3"></td>
                                                    <td colspan="2">@lang('site.shipping')</td>
                                                    <td><input type="number" step="0.01" name="shipping" id="shipping"
                                                            class="shipping form-control"></td>
                                                </tr>
                                                <tr>
                                                    <td colspan="3"></td>
                                                    <td colspan="2">@lang('site.total_due')</td>
                                                    <td><input type="number" step="0.01" name="total_due" id="total_due"
                                                            class="total_due form-control" readonly="readonly"></td>
                                                </tr>
                                            </tfoot>
                                        </table>
                                    </div>
                                    <div class="text-right pt-3 col-12">
                                        <button type="submit" class="btn btn-primary">
                                            <i class="feather icon-plus"></i>
                                            @lang('site.save')
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