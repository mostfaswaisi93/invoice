@extends('layouts.admin')

@section('content')

<div class="content-header row">
    <div class="content-header-left col-md-9 col-12 mb-2">
        <div class="row breadcrumbs-top">
            <div class="col-12">
                <h2 class="content-header-title float-left mb-0">@lang('site.invoices')</h2>
                <div class="breadcrumb-wrapper col-12">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="/admin">@lang('site.home')</a></li>
                        <li class="breadcrumb-item active">@lang('site.invoices')</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>
</div>

<section class="content-body">
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">@lang('site.invoices')</h4>
                </div>
                <div class="card-content">
                    <div class="card-body card-dashboard">
                        <a href="{{ route('admin.invoices.create') }}" class="btn btn-primary mb-2">
                            <i class="feather icon-plus"></i>
                            &nbsp; @lang('site.add')
                        </a>
                        <div class="table-responsive">
                            <table class="table table-bordered table-striped" id="data-table">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>@lang('site.customer_name')</th>
                                        <th>@lang('site.invoice_date')</th>
                                        <th>@lang('site.total_due')</th>
                                        <th width="25%">@lang('site.action')</th>
                                    </tr>
                                </thead>
                                <tbody></tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection

@push('scripts')

<script>
    $(document).ready(function(){
        $('#data-table').DataTable({
            processing: true,
            serverSide: true,
            responsive: true,
            order: [[ 2, "desc" ]],
            ajax:{
            url: "{{ route('admin.invoices.index') }}",
            },
            columns:[
                {
                    render: function (data, type, row, meta) {
                        return meta.row + meta.settings._iDisplayStart + 1;
                    }, searchable: false, orderable: false
                },
                {data: 'customer_name', name: 'customer_name'},
                {data: 'invoice_date', name: 'invoice_date'},
                {data: 'total_due', name: 'total_due'},
                {data: 'action', name: 'action', orderable: false}
            ]
        });
    });
</script>

@endpush