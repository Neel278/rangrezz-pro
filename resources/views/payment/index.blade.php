@extends('paintings.layouts.master')

@section('title')
Rangrezz | Auctions
@endsection

@section('content')
<section class="content">
    <div class="container-fluid">
        <div class="block-header">
            <h2>Payment Page</h2>
        </div>
        <!-- Input -->
        <div class="row clearfix">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="card">
                    <div class="header">
                        Buy Paintings Directly From Site
                    </div>
                    {{-- {{dd($painting)}} --}}
                    <div class="body">
                        <form action="/payment" method="POST">
                            <div class="row clearfix">
                                <div class="col-sm-12">
                                    <div class="form-group form-float">
                                        <div class="form-line">
                                            <input type="text" class="form-control"
                                                value="{{ $painting->customer->username }}">
                                            <label class="form-label">Name</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-12">
                                    <div class="form-group form-float">
                                        <div class="form-line">
                                            <input type="text" class="form-control">
                                            <label class="form-label">Shipping Address</label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="demo-masked-input">
                                <div class="row clearfix">
                                    <div class="col-md-12">
                                        <b>Money (Dollar)</b>
                                        <div class="input-group">
                                            <span class="input-group-addon">
                                                <i class="material-icons">attach_money</i>
                                            </span>
                                            <div class="form-line">
                                                <input type="text" class="form-control money-dollar"
                                                    placeholder="Ex: 99,99 $" value="{{ $painting->bidding_price }}">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-7">
                                        <b>Credit Card</b>
                                        <div class="input-group">
                                            <span class="input-group-addon">
                                                <i class="material-icons">credit_card</i>
                                            </span>
                                            <div class="form-line">
                                                <input type="text" class="form-control credit-card"
                                                    placeholder="Ex: 0000 0000 0000 0000">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <b>Expiry Date</b>
                                        <div class="input-group">
                                            <span class="input-group-addon">
                                                <i class="material-icons">date_range</i>
                                            </span>
                                            <div class="form-line">
                                                <input type="text" class="form-control date"
                                                    placeholder="Ex: 30/07/2016">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-2">
                                        <b>CVV</b>
                                        <div class="input-group">
                                            <span class="input-group-addon">
                                                <i class="material-icons">lock</i>
                                            </span>
                                            <div class="form-line">
                                                <input type="text" class="form-control date" placeholder="Ex: 123">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <b>Phone Number</b>
                                        <div class="input-group">
                                            <span class="input-group-addon">
                                                <i class="material-icons">phone</i>
                                            </span>
                                            <div class="form-line">
                                                <input type="text" class="form-control mobile-phone-number"
                                                    placeholder="Ex: +00 (000) 000-00-00">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <b>Email Address</b>
                                        <div class="input-group">
                                            <span class="input-group-addon">
                                                <i class="material-icons">email</i>
                                            </span>
                                            <div class="form-line">
                                                <input type="text" class="form-control email"
                                                    placeholder="Ex: example@example.com"
                                                    value="{{ $painting->customer->email }}">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div style="margin-bottom: 10px">
                                <button type="submit" class="btn btn-primary">Purchase</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection