@extends('paintings.layouts.master')

@section('title')
Rangrezz | Buy Painting
@endsection

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
                            Description
                        </h2>
                    </div>
                    <div class="body">
                        <div class="row clearfix">
                            @include('paintings.messages.messages')
                            <div class="col-lg-2 col-md-2 col-sm-12 col-xs-12"></div>
                            <div class="col-lg-8 col-md-8 col-sm-12 col-xs-12">
                                <div class="card">

                                    <div class="row">
                                        <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                            <div class="header">
                                                <h2>
                                                    {{ $painting->title }} <small>{{ $painting->subtitle }}</small>
                                                </h2>
                                                <img src="{{ asset($painting->painting_pic) }}" class="img-thumbnail"
                                                    alt="{{ $painting->title }}" />

                                            </div>
                                        </div>
                                        <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                            <div class="body">
                                                <h5>Description:</h5>
                                                {{ $painting->description }}
                                                <h5>Ending On:</h5>
                                                <p>{{ $painting->ending_date }}</p>
                                                @livewire('add-new-bid',['painting'=>$painting])
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-2 col-md-2 col-sm-12 col-xs-12"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- #END# Body-->
    @endsection