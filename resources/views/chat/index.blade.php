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
                    <div class="body">
                        <div class="row">
                            <div class="messaging ">
                                <div class="inbox_msg">
                                    <div class="mesgs">
                                        <div class="msg_history">
                                            <div class="incoming_msg">
                                                <div class="incoming_msg_img"> <img
                                                        src="https://ptetutorials.com/images/user-profile.png"
                                                        alt="sunil">
                                                </div>
                                                <div class="received_msg">
                                                    <div class="received_withd_msg">
                                                        <p>Test which is a new approach to have all
                                                            solutions</p>
                                                        <span class="time_date"> 11:01 AM | June 9</span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="outgoing_msg">
                                                <div class="sent_msg">
                                                    <p>Test which is a new approach to have all
                                                        solutions</p>
                                                    <span class="time_date"> 11:01 AM | June 9</span>
                                                </div>
                                            </div>
                                            <div class="incoming_msg">
                                                <div class="incoming_msg_img"> <img
                                                        src="https://ptetutorials.com/images/user-profile.png"
                                                        alt="sunil">
                                                </div>
                                                <div class="received_msg">
                                                    <div class="received_withd_msg">
                                                        <p>Test, which is a new approach to have</p>
                                                        <span class="time_date"> 11:01 AM | Yesterday</span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="outgoing_msg">
                                                <div class="sent_msg">
                                                    <p>Apollo University, Delhi, India Test</p>
                                                    <span class="time_date"> 11:01 AM | Today</span>
                                                </div>
                                            </div>
                                            <div class="incoming_msg">
                                                <div class="incoming_msg_img"> <img
                                                        src="https://ptetutorials.com/images/user-profile.png"
                                                        alt="sunil">
                                                </div>
                                                <div class="received_msg">
                                                    <div class="received_withd_msg">
                                                        <p>We work directly with our designers and suppliers,
                                                            and sell direct to you, which means quality, exclusive
                                                            products, at a price anyone can afford.</p>
                                                        <span class="time_date"> 11:01 AM | Today</span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="outgoing_msg">
                                                <div class="sent_msg">
                                                    <p>Apollo University, Delhi, India Test</p>
                                                    <span class="time_date"> 11:01 AM | Today</span>
                                                </div>
                                            </div>
                                            <div class="incoming_msg">
                                                <div class="incoming_msg_img"> <img
                                                        src="https://ptetutorials.com/images/user-profile.png"
                                                        alt="sunil">
                                                </div>
                                                <div class="received_msg">
                                                    <div class="received_withd_msg">
                                                        <p>We work directly with our designers and suppliers,
                                                            and sell direct to you, which means quality, exclusive
                                                            products, at a price anyone can afford.</p>
                                                        <span class="time_date"> 11:01 AM | Today</span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="outgoing_msg">
                                                <div class="sent_msg">
                                                    <p>Apollo University, Delhi, India Test</p>
                                                    <span class="time_date"> 11:01 AM | Today</span>
                                                </div>
                                            </div>
                                            <div class="incoming_msg">
                                                <div class="incoming_msg_img"> <img
                                                        src="https://ptetutorials.com/images/user-profile.png"
                                                        alt="sunil">
                                                </div>
                                                <div class="received_msg">
                                                    <div class="received_withd_msg">
                                                        <p>We work directly with our designers and suppliers,
                                                            and sell direct to you, which means quality, exclusive
                                                            products, at a price anyone can afford.</p>
                                                        <span class="time_date"> 11:01 AM | Today</span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="outgoing_msg">
                                                <div class="sent_msg">
                                                    <p>Apollo University, Delhi, India Test</p>
                                                    <span class="time_date"> 11:01 AM | Today</span>
                                                </div>
                                            </div>
                                            <div class="incoming_msg">
                                                <div class="incoming_msg_img"> <img
                                                        src="https://ptetutorials.com/images/user-profile.png"
                                                        alt="sunil">
                                                </div>
                                                <div class="received_msg">
                                                    <div class="received_withd_msg">
                                                        <p>We work directly with our designers and suppliers,
                                                            and sell direct to you, which means quality, exclusive
                                                            products, at a price anyone can afford.</p>
                                                        <span class="time_date"> 11:01 AM | Today</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="type_msg">
                                            <div class="input_msg_write">
                                                <input type="text" class="write_msg" placeholder="Type a message" />
                                                <button class="msg_send_btn" type="button">
                                                    <span class="material-icons">
                                                        send
                                                    </span>
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection