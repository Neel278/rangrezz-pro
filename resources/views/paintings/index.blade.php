@extends('paintings.layouts.master')

@section('title')
Rangrezz | Auctions
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
                            Current Auctions
                        </h2>
                    </div>
                    <div class="body">
                        <div class="body table-responsive">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>Painting</th>
                                        <th>Title</th>
                                        <th>Price</th>
                                        <th>Ending</th>
                                        <th>Actions</th>
                                        <th>Bid</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    {{-- {{dd($likes)}} --}}
                                    @forelse($paintings as $painting)
                                    <tr>
                                        <td>
                                            <img src="{{ asset($painting->painting_pic) }}" alt="painting"
                                                style="height: 170px; width: 200px;">
                                        </td>
                                        <td>{{ $painting->title }}</td>
                                        <td>{{ $painting->starting_price }}$</td>
                                        <td>{{ date("d/m/y",strtotime($painting->ending_date)) }}</td>
                                        @if (auth()->id() !== $painting->owner_id)
                                        @livewire('add-like',['painting_id'=>$painting->id])
                                        {{-- @livewire('follow-user',['painting_id'=>$painting->owner_id]) --}}
                                        {{-- @livewire('add-comment',['painting_id'=>$painting->id]) --}}
                                        <td>
                                            <a href="{{ $painting->path() }}">
                                                <button type="button" class="btn btn-info">
                                                    Bid
                                                </button>
                                            </a>
                                        </td>
                                        @endif
                                    </tr>
                                    @empty
                                    <tr>
                                        <td>
                                            <h4>No Paintings Avilable Right Now!!</h4>
                                        </td>
                                    </tr>
                                    @endforelse
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