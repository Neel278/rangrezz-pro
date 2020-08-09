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
                        <h4>You are paying - {{ $painting->bidding_price }}$</h4>
                        <br />
                        <div id="charge-error" class="alert alert-danger {{ !Session::has('error') ? 'hidden' : '' }} ">
                            {{ Session::get('error') }}
                        </div>
                        <form action="{{ route('checkout',['painting' => $painting->id]) }}" method="POST"
                            id="checkout-form">
                            @csrf
                            <div class="row clearfix">
                                <div class="col-sm-12">
                                    <div class="form-group form-float">
                                        <div class="form-line">
                                            <input type="text" class="form-control" name="name" id="name"
                                                value="{{ $painting->customer->username }}">
                                            <label class="form-label">Name</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-12">
                                    <div class="form-group form-float">
                                        <div class="form-line">
                                            <input type="text" class="form-control" id="address" name="address">
                                            <label class="form-label">Shipping Address</label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="demo-masked-input">
                                <div class="row clearfix">
                                    <div class="col-sm-12">
                                        <div class="form-group form-float">
                                            <div class="form-line">
                                                <input type="text" class="form-control" id="card-name">
                                                <label class="form-label">Cardholder Name</label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <b>Credit Card</b>
                                        <div class="input-group">
                                            <span class="input-group-addon">
                                                <i class="material-icons">credit_card</i>
                                            </span>
                                            <div class="form-line">
                                                <input type="text" class="form-control credit-card" id="card-number"
                                                    placeholder="Ex: 0000 0000 0000 0000">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-2">
                                        <b>Expiry Month</b>
                                        <div class="input-group">
                                            <span class="input-group-addon">
                                                <i class="material-icons">date_range</i>
                                            </span>
                                            <div class="form-line">
                                                <input type="text" class="form-control date" id="card-expiry-month"
                                                    placeholder="Ex: 07">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-2">
                                        <b>Expiry Year</b>
                                        <div class="input-group">
                                            <span class="input-group-addon">
                                                <i class="material-icons">date_range</i>
                                            </span>
                                            <div class="form-line">
                                                <input type="text" class="form-control date" id="card-expiry-year"
                                                    placeholder="Ex: 2016">
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
                                                <input type="text" class="form-control date" placeholder="Ex: 123"
                                                    id="card-cvc">
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
                                                <input type="text" name="phone" class="form-control mobile-phone-number"
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
                                                    placeholder="Ex: example@example.com" name="email"
                                                    value="{{ $painting->customer->email }}">
                                            </div>
                                        </div>
                                    </div>
                                    {{-- <div class="col-md-12">
                                        <label for="card-element">Card</label>
                                        <div id="card-element"></div>
                                    </div> --}}
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

@section('scripts')
<script src="https://js.stripe.com/v3/"></script>
<script src="{{ asset('js/checkout.js') }}"></script>
@endsection