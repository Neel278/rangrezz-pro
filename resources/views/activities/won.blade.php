@extends('paintings.layouts.master')

@section('title','Rangrezz | Your Liked Art')

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
                            Your Winnings
                        </h2>

                    </div>
                    <div class="body">
                        @if (Session::has('success'))
                        <div id="charge-message" class="alert alert-success">
                            {{ Session::get('success') }}
                        </div>
                        @endif
                        <div class="body table-responsive">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>Painting</th>
                                        <th>Title</th>
                                        <th>Starting Price</th>
                                        <th>Latest Price</th>
                                        <th>Ended(Y-m-d)</th>
                                        <th>More</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    {{-- {{dd(auth()->user()->paintings->where('status',1))}} --}}

                                    @foreach($paintings as $painting)
                                    <tr>
                                        <td><img src="{{ asset($painting->painting_pic) }}" alt="painting"
                                                style="height: 200px; width: 200px;"></td>
                                        <td>{{ $painting->title }}</td>
                                        <td>{{ $painting->starting_price }}</td>
                                        <td>{{ $painting->bidding_price }}</td>
                                        <td>{{ date("Y-m-d",strtotime($painting->ending_date)) }}</td>
                                        @if($painting->status == 1 && $painting->bidder_id != 0)
                                        <td>
                                            {{-- {{dd($painting->customer->username)}} --}}
                                            <a
                                                href="{{ route('user.profile',['username'=>$painting->owner->username]) }}">
                                                <button type="button" class="btn btn-info">
                                                    Seller Profile
                                                </button>
                                            </a>

                                            <br /><br />

                                            <a href="{{ route('chatting',['painting'=>$painting->id]) }}">
                                                <button type="button" class="btn btn-info">
                                                    Chat With Seller
                                                </button>
                                            </a>

                                            <br /><br />

                                            <a href="{{ route('payment.index',['painting'=>$painting->id]) }}">
                                                <button type="button" class="btn btn-info">
                                                    Buy Painting
                                                </button>
                                            </a>
                                        </td>
                                    </tr>
                                    @else
                                    <td>Sorry better <br> luck next time.</td>
                                    @endif
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- #END# Body Copy -->
    </div>

</section>
<script type="text/javascript">
    $(document).ready(function()
        {
            $('table').DataTable();

            $('.dataTables_length').css('display','none');
        });
</script>


@endsection