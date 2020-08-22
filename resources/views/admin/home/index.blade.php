@extends('layouts.admin')
@section('title') {{ trans('admin.home') }}@endsection

@section('content')

<section class="content-body">
    <div class="row">
        <div class="col-lg-6 col-md-12 col-sm-12">
            <div class="card bg-analytics text-white">
                <div class="card-content">
                    <div class="card-body text-center">
                        <img class="round" src="{{ url('admin_files/invoice.png') }}" alt="avatar" height="93"
                            width="90">
                    </div> <br>
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-md-6 col-12">
            <div class="card">
                <div class="card-header d-flex flex-column align-items-start pb-0">
                    <div class="avatar bg-rgba-primary p-50 m-0">
                        <div class="avatar-content">
                            <i class="feather icon-slack text-primary font-medium-5"></i>
                        </div>
                    </div>
                    <h2 class="text-bold-700 mt-1 mb-25">{{ $invoices_count }} {{ trans('admin.invoice') }} </h2>
                    <p class="mb-0">{{ trans('admin.invoices') }} - AJAX</p> <br>
                </div>
                <div class="card-content">
                    <div id="subscribe-gain-chart"></div>
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-md-6 col-12">
            <div class="card">
                <div class="card-header d-flex flex-column align-items-start pb-0">
                    <div class="avatar bg-rgba-warning p-50 m-0">
                        <div class="avatar-content">
                            <i class="feather icon-slack text-warning font-medium-5"></i>
                        </div>
                    </div>
                    <h2 class="text-bold-700 mt-1 mb-25">{{ $invoices_count }} {{ trans('admin.invoice') }}</h2>
                    <p class="mb-0">{{ trans('admin.invoices') }}</p> <br>
                </div>
                <div class="card-content">
                    <div id="orders-received-chart"></div>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection