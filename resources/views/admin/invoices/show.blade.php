@extends('layouts.app')
@section('content')
<div class="row justify-content-center">
    <div class="col-12">
        <div class="card">
            <div class="card-header d-flex">
                <h2>{{ __('Frontend/frontend.invoice', ['invoice_number' => $invoice->invoice_number]) }}</h2>
                <a href="{{ route('invoice.index') }}" class="btn btn-primary ml-auto"><i class="fa fa-home"></i>
                    {{ __('Frontend/frontend.back_to_invoice') }}</a>
            </div>

            <div class="card-body">
                <div class="table-responsive">
                    <table class="table">
                        <tr>
                            <th>{{ __('Frontend/frontend.customer_name') }}</th>
                            <td>{{ $invoice->customer_name }}</td>
                            <th>{{ __('Frontend/frontend.customer_email') }}</th>
                            <td>{{ $invoice->customer_email }}</td>
                        </tr>
                        <tr>
                            <th>{{ __('Frontend/frontend.customer_mobile') }}</th>
                            <td>{{ $invoice->customer_mobile }}</td>
                            <th>{{ __('Frontend/frontend.company_name') }}</th>
                            <td>{{ $invoice->company_name }}</td>
                        </tr>
                        <tr>
                            <th>{{ __('Frontend/frontend.invoice_number') }}</th>
                            <td>{{ $invoice->invoice_number }}</td>
                            <th>{{ __('Frontend/frontend.invoice_date') }}</th>
                            <td>{{ $invoice->invoice_date }}</td>
                        </tr>
                    </table>

                    <h3>{{ __('Frontend/frontend.invoice_details') }}</h3>

                    <table class="table">
                        <thead>
                            <tr>
                                <th></th>
                                <th>{{ __('Frontend/frontend.product_name') }}</th>
                                <th>{{ __('Frontend/frontend.unit') }}</th>
                                <th>{{ __('Frontend/frontend.quantity') }}</th>
                                <th>{{ __('Frontend/frontend.unit_price') }}</th>
                                <th>{{ __('Frontend/frontend.product_subtotal') }}</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($invoice->details as $item)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $item->product_name }}</td>
                                <td>{{ $item->unitText() }}</td>
                                <td>{{ $item->quantity }}</td>
                                <td>{{ $item->unit_price }}</td>
                                <td>{{ $item->row_sub_total }}</td>
                            </tr>
                            @endforeach
                        </tbody>
                        <tfoot>
                            <tr>
                                <td colspan="3"></td>
                                <th colspan="2">{{ __('Frontend/frontend.sub_total') }}</th>
                                <td>{{ $invoice->sub_total }}</td>
                            </tr>
                            <tr>
                                <td colspan="3"></td>
                                <th colspan="2">{{ __('Frontend/frontend.discount') }}</th>
                                <td>{{ $invoice->discountResult() }}</td>
                            </tr>
                            <tr>
                                <td colspan="3"></td>
                                <th colspan="2">{{ __('Frontend/frontend.vat') }}</th>
                                <td>{{ $invoice->vat_value }}</td>
                            </tr>
                            <tr>
                                <td colspan="3"></td>
                                <th colspan="2">{{ __('Frontend/frontend.shipping') }}</th>
                                <td>{{ $invoice->shippint }}</td>
                            </tr>
                            <tr>
                                <td colspan="3"></td>
                                <th colspan="2">{{ __('Frontend/frontend.total_due') }}</th>
                                <td>{{ $invoice->total_due }}</td>
                            </tr>

                        </tfoot>
                    </table>
                </div>

                <div class="row">
                    <div class="col-12 text-center">
                        <a href="{{ route('invoice.print', $invoice->id) }}" class="btn btn-primary btn-sm ml-auto"><i
                                class="fa fa-print"></i> {{ __('Frontend/frontend.print') }}</a>
                        <a href="{{ route('invoice.pdf', $invoice->id) }}" class="btn btn-secondary btn-sm ml-auto"><i
                                class="fa fa-file-pdf"></i> {{ __('Frontend/frontend.export_pdf') }}</a>
                        <a href="{{ route('invoice.send_to_email', $invoice->id) }}"
                            class="btn btn-success btn-sm ml-auto"><i class="fa fa-envelope"></i>
                            {{ __('Frontend/frontend.send_to_email') }}</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


@endsection

<div class="content-header row">
    <div class="content-header-left col-md-9 col-12 mb-2">
        <div class="row breadcrumbs-top">
            <div class="col-12">
                <h2 class="content-header-title float-left mb-0">Invoice</h2>
                <div class="breadcrumb-wrapper col-12">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="index.html">Home</a>
                        </li>
                        <li class="breadcrumb-item"><a href="#">Pages</a>
                        </li>
                        <li class="breadcrumb-item active">Invoice
                        </li>
                    </ol>
                </div>
            </div>
        </div>
    </div>
    <div class="content-header-right text-md-right col-md-3 col-12 d-md-block d-none">
        <div class="form-group breadcrum-right">
            <div class="dropdown">
                <button class="btn-icon btn btn-primary btn-round btn-sm dropdown-toggle" type="button"
                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i
                        class="feather icon-settings"></i></button>
                <div class="dropdown-menu dropdown-menu-right"><a class="dropdown-item" href="#">Chat</a><a
                        class="dropdown-item" href="#">Email</a><a class="dropdown-item" href="#">Calendar</a></div>
            </div>
        </div>
    </div>
</div>
<div class="content-body">
    <!-- invoice functionality start -->
    <section class="invoice-print mb-1">
        <div class="row">

            <fieldset class="col-12 col-md-5 mb-1 mb-md-0">
                <div class="input-group">
                    <input type="text" class="form-control" placeholder="Email" aria-describedby="button-addon2">
                    <div class="input-group-append" id="button-addon2">
                        <button class="btn btn-outline-primary" type="button">Send Invoice</button>
                    </div>
                </div>
            </fieldset>
            <div class="col-12 col-md-7 d-flex flex-column flex-md-row justify-content-end">
                <button class="btn btn-primary btn-print mb-1 mb-md-0"> <i class="feather icon-file-text"></i>
                    Print</button>
                <button class="btn btn-outline-primary  ml-0 ml-md-1"> <i class="feather icon-download"></i>
                    Download</button>
            </div>
        </div>
    </section>
    <!-- invoice functionality end -->
    <!-- invoice page -->
    <section class="card invoice-page">
        <div id="invoice-template" class="card-body">
            <!-- Invoice Company Details -->
            <div id="invoice-company-details" class="row">
                <div class="col-sm-6 col-12 text-left pt-1">
                    <div class="media pt-1">
                        <img src="../../../app-assets/images/logo/logo.png" alt="company logo" />
                    </div>
                </div>
                <div class="col-sm-6 col-12 text-right">
                    <h1>Invoice</h1>
                    <div class="invoice-details mt-2">
                        <h6>INVOICE NO.</h6>
                        <p>001/2019</p>
                        <h6 class="mt-2">INVOICE DATE</h6>
                        <p>10 Dec 2018</p>
                    </div>
                </div>
            </div>
            <!--/ Invoice Company Details -->

            <!-- Invoice Recipient Details -->
            <div id="invoice-customer-details" class="row pt-2">
                <div class="col-sm-6 col-12 text-left">
                    <h5>Recipient</h5>
                    <div class="recipient-info my-2">
                        <p>Peter Stark</p>
                        <p>8577 West West Drive</p>
                        <p>Holbrook, NY</p>
                        <p>90001</p>
                    </div>
                    <div class="recipient-contact pb-2">
                        <p>
                            <i class="feather icon-mail"></i>
                            peter@mail.com
                        </p>
                        <p>
                            <i class="feather icon-phone"></i>
                            +91 988 888 8888
                        </p>
                    </div>
                </div>
                <div class="col-sm-6 col-12 text-right">
                    <h5>Microsion Technologies Pvt. Ltd.</h5>
                    <div class="company-info my-2">
                        <p>9 N. Sherwood Court</p>
                        <p>Elyria, OH</p>
                        <p>94203</p>
                    </div>
                    <div class="company-contact">
                        <p>
                            <i class="feather icon-mail"></i>
                            hello@pixinvent.net
                        </p>
                        <p>
                            <i class="feather icon-phone"></i>
                            +91 999 999 9999
                        </p>
                    </div>
                </div>
            </div>
            <!--/ Invoice Recipient Details -->

            <!-- Invoice Items Details -->
            <div id="invoice-items-details" class="pt-1 invoice-items-table">
                <div class="row">
                    <div class="table-responsive col-12">
                        <table class="table table-borderless">
                            <thead>
                                <tr>
                                    <th>TASK DESCRIPTION</th>
                                    <th>HOURS</th>
                                    <th>RATE</th>
                                    <th>AMOUNT</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>Website Redesign</td>
                                    <td>60</td>
                                    <td>15 USD</td>
                                    <td>90000 USD</td>
                                </tr>
                                <tr>
                                    <td>Newsletter template design</td>
                                    <td>20</td>
                                    <td>12 USD</td>
                                    <td>24000 USD</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <div id="invoice-total-details" class="invoice-total-table">
                <div class="row">
                    <div class="col-7 offset-5">
                        <div class="table-responsive">
                            <table class="table table-borderless">
                                <tbody>
                                    <tr>
                                        <th>SUBTOTAL</th>
                                        <td>114000 USD</td>
                                    </tr>
                                    <tr>
                                        <th>DISCOUNT (5%)</th>
                                        <td>5700 USD</td>
                                    </tr>
                                    <tr>
                                        <th>TOTAL</th>
                                        <td>108300 USD</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Invoice Footer -->
            <div id="invoice-footer" class="text-right pt-3">
                <p>Transfer the amounts to the business amount below. Please include invoice number on your check.
                    <p class="bank-details mb-0">
                        <span class="mr-4">BANK: <strong>FTSBUS33</strong></span>
                        <span>IBAN: <strong>G882-1111-2222-3333</strong></span>
                    </p>
            </div>
            <!--/ Invoice Footer -->

        </div>
    </section>
    <!-- invoice page end -->

</div>