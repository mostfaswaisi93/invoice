@extends('layouts.admin')

@section('content')

<div class="content-header row">
    <div class="content-header-left col-md-9 col-12 mb-2">
        <div class="row breadcrumbs-top">
            <div class="col-12">
                <h2 class="content-header-title float-left mb-0">{{ trans('admin.invoices') }}</h2>
                <div class="breadcrumb-wrapper col-12">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="/admin">{{ trans('admin.home') }}</a>
                        </li>
                        <li class="breadcrumb-item active">{{ trans('admin.invoices') }}</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="content-body">
    <section id="add-row">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">{{ trans('admin.invoices') }}</h4>
                    </div>
                    <div class="card-content">
                        <div class="card-body">
                            <button id="addRow" class="btn btn-primary mb-2">
                                <i class="feather icon-plus"></i>&nbsp; {{ trans('admin.add') }}</button>
                            <div class="table-responsive">
                                <table class="table add-rows" id="data-table">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>{{ trans('admin.customer_name') }}</th>
                                            <th>{{ trans('admin.invoice_date') }}</th>
                                            <th>{{ trans('admin.total_due') }}</th>
                                            <th>{{ trans('admin.action') }}</th>
                                        </tr>
                                    </thead>
                                    </thead>
                                    <tbody>
                                        @foreach($invoices as $invoice)
                                        <tr>
                                            <td></td>
                                            <td><a
                                                    href="{{ route('admin.invoices.show', $invoice->id) }}">{{ $invoice->customer_name }}</a>
                                            </td>
                                            <td>{{ $invoice->invoice_date }}</td>
                                            <td>{{ $invoice->total_due }}</td>
                                            <td>
                                                <a href="{{ route('admin.invoices.edit', $invoice->id) }}"
                                                    class="btn btn-primary btn-sm"><i class="fa fa-edit"></i></a>
                                                <a href="javascript:void(0)"
                                                    onclick="if (confirm('{{ __('Frontend/frontend.r_u_sure') }}')) { document.getElementById('delete-{{ $invoice->id }}').submit(); } else { return false; }"
                                                    class="btn btn-danger btn-sm"><i class="fa fa-trash"></i></a>
                                                <form action="{{ route('admin.invoices.destroy', $invoice->id) }}"
                                                    method="post" id="delete-{{ $invoice->id }}" style="display: none;">
                                                    @csrf
                                                    @method('DELETE')
                                                </form>
                                            </td>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>

@endsection

@push('scripts')

<script>

</script>

@endpush