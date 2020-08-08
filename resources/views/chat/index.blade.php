@extends('paintings.layouts.master')

@section('title')
Chat
@endsection

@section('styles')
<link rel="stylesheet" href="{{ asset('css/chat.css') }}">
@endsection

@section('content')
<section class="content">
    <div class="container-fluid">
        <div class="block-header">
            <h2>MESSAGING</h2>
        </div>

        <!-- Body Copy -->
        <div class="row clearfix">
            {{-- ======================================================================================================================================== --}}
            <div class="col-xs-12 col-sm-12">
                <div class="card">
                    <div class="body" id="app">
                        <chats :painting="{{$painting}}" :user="{{ auth()->user() }}"></chats>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
</section>
@endsection