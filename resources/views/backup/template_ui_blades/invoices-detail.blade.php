@extends('layouts.master')
@section('title') @lang('translation.Invoice_Detail') @endsection
@section('content')
    @component('components.breadcrumb')
        @slot('pagetitle') Invoices @endslot
        @slot('title') Invoice Detail @endslot
    @endcomponent

    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-body">
                    <div class="invoice-title">
                        <h4 class="float-right font-size-15">Invoice #DZ0112 <span
                                class="badge badge-success font-size-12 ml-2">Paid</span></h4>
                        <div class="mb-4">
                            <img src="{{ URL::asset('/assets/images/logo-dark.png')}}" alt="logo" height="20" />
                        </div>
                        <div class="text-muted">
                            <p class="mb-1">3184 Spruce Drive Pittsburgh, PA 15201</p>
                            <p class="mb-1"><i class="uil uil-envelope-alt mr-1"></i> xyz@987.com</p>
                            <p><i class="uil uil-phone mr-1"></i> 012-345-6789</p>
                        </div>
                    </div>

                    <hr class="my-4">

                    <div class="row">
                        <div class="col-sm-6">
                            <div class="text-muted">
                                <h5 class="font-size-16 mb-3">Billed To:</h5>
                                <h5 class="font-size-15 mb-2">Preston Miller</h5>
                                <p class="mb-1">4068 Post Avenue Newfolden, MN 56738</p>
                                <p class="mb-1">PrestonMiller@armyspy.com</p>
                                <p>001-234-5678</p>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="text-muted text-sm-right">
                                <div>
                                    <h5 class="font-size-15 mb-1">Invoice No:</h5>
                                    <p>#DZ0112</p>
                                </div>
                                <div class="mt-4">
                                    <h5 class="font-size-15 mb-1">Invoice Date:</h5>
                                    <p>12 Oct, 2020</p>
                                </div>
                                <div class="mt-4">
                                    <h5 class="font-size-15 mb-1">Order No:</h5>
                                    <p>#1123456</p>
                                </div>
                            </div>
                        </div>
                    </div>


                    <div class="py-2">
                        <h5 class="font-size-15">Order summary</h5>

                        <div class="table-responsive">
                            <table class="table table-nowrap table-centered mb-0">
                                <thead>
                                    <tr>
                                        <th style="width: 70px;">No.</th>
                                        <th>Item</th>
                                        <th>Price</th>
                                        <th>Quantity</th>
                                        <th class="text-right" style="width: 120px;">Total</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <th scope="row">01</th>
                                        <td>
                                            <h5 class="font-size-15 mb-1">Headphone Boot s4</h5>
                                            <p class="mb-0">Color : <span class="font-weight-medium">Dark</span></p>
                                        </td>
                                        <td>$24.60</td>
                                        <td>1</td>
                                        <td class="text-right">$24.60</td>
                                    </tr>

                                    <tr>
                                        <th scope="row">02</th>
                                        <td>
                                            <h5 class="font-size-15 mb-1">Headphone Boot-Xe</h5>
                                            <p class="mb-0">Color : <span class="font-weight-medium">Red</span></p>
                                        </td>
                                        <td>$20.24</td>
                                        <td>2</td>
                                        <td class="text-right">$40.48</td>
                                    </tr>

                                    <tr>
                                        <th scope="row" colspan="4" class="text-right">Sub Total</th>
                                        <td class="text-right">$112.60</td>
                                    </tr>
                                    <tr>
                                        <th scope="row" colspan="4" class="border-0 text-right">
                                            Discount :</th>
                                        <td class="border-0 text-right">- $22.60</td>
                                    </tr>
                                    <tr>
                                        <th scope="row" colspan="4" class="border-0 text-right">
                                            Shipping Charge :</th>
                                        <td class="border-0 text-right">$20.00</td>
                                    </tr>
                                    <tr>
                                        <th scope="row" colspan="4" class="border-0 text-right">
                                            Tax</th>
                                        <td class="border-0 text-right">$12.00</td>
                                    </tr>
                                    <tr>
                                        <th scope="row" colspan="4" class="border-0 text-right">Total</th>
                                        <td class="border-0 text-right">
                                            <h4 class="m-0 font-weight-semibold">$112.00</h4>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <div class="d-print-none mt-4">
                            <div class="float-right">
                                <a href="javascript:window.print()" class="btn btn-success waves-effect waves-light mr-1"><i
                                        class="fa fa-print"></i></a>
                                <a href="#" class="btn btn-primary w-md waves-effect waves-light">Send</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end row -->

@endsection
