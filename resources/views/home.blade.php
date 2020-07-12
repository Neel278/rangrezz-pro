@extends('paintings.layouts.master')

@section('title')
Rangrezz | Dashboard
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
                            BODY COPY
                        </h2>

                    </div>
                    <div class="body">
                        <h1 style="text-align: center; text-transform: uppercase;">
                            {{"Welcome ,".auth()->user()->username."!" }}</h1>
                        <p>

                        </p>
                    </div>
                </div>
            </div>
        </div>
        <!-- #END# Body Copy -->
    </div>
</section>
@endsection