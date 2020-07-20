@extends('paintings.layouts.master')

@section('title','Rangrezz | Activity')

@section('content')

<section class="content">
    <div class="container-fluid">
        <div class="block-header">
            <h2>DASHBOARD</h2>
        </div>

        <!-- Body Copy -->
        <div class="row clearfix">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="card">
                    <div class="header">
                        <h2>
                            Settings
                        </h2>
                    </div>
                    <div class="body">
                        <div class="row">
                            <div class="col-md-6" style="text-align: center;">
                                <a type="button" class="btn btn-info waves-effect" href="{{ route('solded') }}">Your
                                    Auctions</a>
                            </div>
                            <div class="col-md-6" style="text-align: center;">
                                <a type="button" class="btn btn-success waves-effect" href="{{ route('won') }}">Winning
                                    Auctions</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- #END# Body Copy -->
    </div>

</section>

@endsection