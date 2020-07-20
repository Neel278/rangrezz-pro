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
            {{-- ======================================================================================================================================== --}}
            <div class="col-xs-12 col-sm-12">
                <div class="card">
                    <div class="body">
                        <div>
                            {{-- <ul class="nav nav-tabs" role="tablist">
                                <li role="presentation" class="active"><a href="#home" aria-controls="home" role="tab"
                                        data-toggle="tab">Home</a></li>
                                <li role="presentation"><a href="#profile_settings" aria-controls="settings" role="tab"
                                        data-toggle="tab">Profile Settings</a></li>
                                <li role="presentation"><a href="#change_password_settings" aria-controls="settings"
                                        role="tab" data-toggle="tab">Change Password</a></li>
                            </ul> --}}

                            <div class="tab-content">
                                <div role="tabpanel" class="tab-pane fade in active" id="home">
                                    {{-- ------------------------------------------------------ --}}
                                    @forelse($paintings as $painting)
                                    <div class="panel panel-default panel-post">
                                        <div class="panel-heading">
                                            <div class="media">
                                                <div class="media-left">
                                                    <a
                                                        href="{{ $painting->owner_id === auth()->id() ? '/profile' : $painting->owner->profile_path() }}">
                                                        <img src="http://lorempixel/50/50" />
                                                    </a>
                                                </div>
                                                <div class="media-body">
                                                    <h4 class="media-heading">
                                                        <a
                                                            href="{{ $painting->owner_id === auth()->id() ? '/profile' : $painting->owner->profile_path() }}">{{ $painting->owner->firstname." ".$painting->owner->lastname }}</a>
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
                                                    @livewire('add-like',['painting_id'=>$painting->id,'total_likes'=>$painting->likes_count])
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
                                        <h4>Nothing To show Yet!!</h4>
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
<script type="text/javascript">
    $(document).ready(function()
    {
        $('table').DataTable();

        $('.dataTables_length').css('display','none');
    });
</script>
@endsection