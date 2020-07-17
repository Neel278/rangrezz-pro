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
                                                <p id="demo">{{ $painting->ending_date }}</p>
                                                <form action="{{ route('update.painting') }}" method="post"
                                                    id="sold-form">
                                                    @csrf
                                                    @method('PUT')
                                                    <input type="hidden" name="painting" id="painting"
                                                        value="{{ $painting->id }}">
                                                </form>
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
    <script>
        // Set the date we're counting down to
var countDownDate = new Date("{{ $painting->ending_date }}").getTime();

// Update the count down every 1 second
var x = setInterval(function() {

// Get today's date and time
var now = new Date().getTime();
// var res = false;

// Find the distance between now and the count down date
var distance = countDownDate - now;

// Time calculations for days, hours, minutes and seconds
var days = Math.floor(distance / (1000 * 60 * 60 * 24));
var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
var seconds = Math.floor((distance % (1000 * 60)) / 1000);

// Output the result in an element with id="demo"
document.getElementById("demo").innerHTML = days + "d " + hours + "h "
+ minutes + "m " + seconds + "s ";

// If the count down is over, write some text 
if (distance < 0) {
clearInterval(x);
document.getElementById("demo").innerHTML = "Bid Closed";
document.getElementById("bid").innerHTML = "Closed";
document.getElementById("bid").type = "button";
document.getElementById("sold-form").submit();

}
}, 1000);
    </script>
    @endsection