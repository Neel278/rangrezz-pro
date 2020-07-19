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
            <div class="col-xs-12 col-sm-3">
                <div class="card profile-card">
                    <div class="profile-header">&nbsp;</div>
                    <div class="profile-body">
                        <div class="image-area">
                            <img src="{{ asset('images/staff5.jpg') }}" alt="Profile Image" />
                        </div>
                        <div class="content-area">
                            <h3>{{ auth()->user()->username }}</h3>
                            <p>{{ auth()->user()->firstname." ".auth()->user()->lastname }}</p>
                            <p>Welcome Back !!</p>
                        </div>
                    </div>
                    <div class="profile-footer">
                        <ul>
                            <li>
                                <span>Painting</span>
                                <span>{{ auth()->user()->paintings->count() }}</span>
                            </li>
                            <li>
                                <span>Active Paintings</span>
                                <span>{{ auth()->user()->paintings->where('status',0)->count() }}</span>
                            </li>
                            <li>
                                <span>Followers</span>
                                <span>{{ auth()->user()->follower->count() }}</span>
                            </li>
                        </ul>
                    </div>
                </div>

                <div class="card card-about-me">
                    <div class="header">
                        <h2>ABOUT ME</h2>
                    </div>
                    <div class="body">
                        <ul>
                            <li>
                                <div class="title">
                                    <i class="material-icons">email</i>
                                    Email
                                </div>
                                <div class="content">
                                    {{ auth()->user()->email }}
                                </div>
                            </li>
                            <li>
                                <div class="title">
                                    <i class="material-icons">location_on</i>
                                    address
                                </div>
                                <div class="content">
                                    {{ auth()->user()->address }}
                                </div>
                            </li>
                            {{-- <li>
                                <div class="title">
                                    <i class="material-icons">edit</i>
                                    Skills
                                </div>
                                <div class="content">
                                    <span class="label bg-red">UI Design</span>
                                    <span class="label bg-teal">JavaScript</span>
                                    <span class="label bg-blue">PHP</span>
                                    <span class="label bg-amber">Node.js</span>
                                </div>
                            </li> --}}
                            <li>
                                <div class="title">
                                    <i class="material-icons">date_range</i>
                                    Birth Date
                                </div>
                                <div class="content">
                                    {{ auth()->user()->birthdate }}
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            {{-- ======================================================================================================================================== --}}
            <div class="col-xs-12 col-sm-9">
                <div class="card">
                    <div class="body">
                        <div>
                            <ul class="nav nav-tabs" role="tablist">
                                <li role="presentation" class="active"><a href="#home" aria-controls="home" role="tab"
                                        data-toggle="tab">Recent Paintings</a></li>
                            </ul>
                            <div class="tab-content">
                                <div role="tabpanel" class="tab-pane fade in active" id="home">
                                    {{-- ------------------------------------------------------ --}}
                                    @forelse($paintings as $painting)
                                    <div class="panel panel-default panel-post">
                                        <div class="panel-heading">
                                            <div class="media">
                                                <div class="media-left">
                                                    <a href="#">
                                                        <img src="{{ asset('images/staff5.jpg') }}" />
                                                    </a>
                                                </div>
                                                <div class="media-body">
                                                    <h4 class="media-heading">
                                                        <a
                                                            href="#">{{ $painting->owner->firstname." ".$painting->owner->lastname }}</a>
                                                    </h4>
                                                    Shared publicly - {{ $painting->created_at }}
                                                </div>
                                            </div>
                                        </div>
                                        <div class="panel-body">
                                            <div class="post">
                                                <div class="post-heading">
                                                    <p>{{ $painting->title }}</p>
                                                </div>
                                                <div class="post-content">
                                                    <a
                                                        href="{{ $painting->owner_id !== auth()->id() ? $painting->path() : "#" }}">
                                                        <img src="{{ asset($painting->painting_pic) }}"
                                                            class="img-responsive" style="margin: 0 auto;" />
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="panel-footer">
                                            <ul>
                                                @if (auth()->id() !== $painting->owner_id)
                                                <li>
                                                    @livewire('add-like',['painting_id'=>$painting->id,'total_likes'=>$painting->likes()->count()])
                                                </li>
                                                <li>
                                                    @livewire('follow-user',['followed_id'=>$painting->owner_id])
                                                </li>
                                                <li>
                                                </li>
                                                @endif
                                            </ul>

                                            <div class="form-group">
                                                <div class="form-line">
                                                    <p>{{ $painting->description }}</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    @empty
                                    <div>
                                        <h4>Nothing to show Yet!!</h4>
                                    </div>
                                    @endforelse
                                    {{-- --------------------------------------------------------------- --}}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            {{-- ================================================================================================ --}}
        </div>
        <!-- #END# Body Copy -->
    </div>
</section>

@endsection