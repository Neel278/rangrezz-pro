@extends('paintings.layouts.master')

@section('title')
Rangrezz | Add Auction
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
                            Add Auction
                        </h2>
                    </div>
                    <div class="body">
                        <div class="row">
                            @include('paintings.messages.messages')
                            <div class="col-md-4"></div>
                            <div class="col-md-4" style="padding: 2rem;">
                                <form action="{{ route('store.painting') }}" method="post"
                                    enctype="multipart/form-data">
                                    @csrf
                                    <div class="form-group">
                                        <label>Title</label>
                                        <div class="form-line">
                                            <input type="text" name="title" class="form-control">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label>Subtitle</label>
                                        <div class="form-line">
                                            <input type="text" name="subtitle" class="form-control">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label>Description</label>
                                        <div class="form-line">
                                            <textarea class="form-control" name="description" rows="8"></textarea>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label>Upload a picture</label>
                                        <div class="form-line">
                                            <input type="file" name="painting_pic" class="form-control">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label>Bidding Price </label>
                                        <div class="form-line">
                                            <input type="text" name="starting_price" class="form-control">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label>Ending Date</label>
                                        <div class="form-line">
                                            <input type="date" name="ending_date" class="form-control">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <button type="submit" class="btn btn-primary" name="upload">Submit</button>
                                    </div>
                                </form>
                            </div>
                            <div class="col-md-4"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- #END# Body Copy -->
    </div>

</section>
@endsection