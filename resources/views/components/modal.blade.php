{{-- {{dd($count,$paintingDetails)}} --}}
<div class="cube-container ">
    <div class="photo-cube">
        {{-- <img class="front" src="" alt=""> --}}
        <div class="back photo-desc">
            <div class="headingbox" style="margin-top: -5px">{{ $paintingDetails->title }}</div>
            <div class="para">
                {{ $paintingDetails->subtitle }}
            </div>
            <a href="" class="button" data-toggle="modal" data-target="#exampleModal{{ $paintingDetails->id }}" c>know
                more</a>
        </div>
        {{-- <img class="left" src="" alt=""> --}}
        <img class="right" src="{{asset($paintingDetails->painting_pic)}}" alt="">
    </div>
</div>

<div class="modal fade" id="exampleModal{{ $paintingDetails->id }}" tabindex="-1" role="dialog"
    aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-sm" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">{{ $paintingDetails->title }}</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <img src="{{asset($paintingDetails->painting_pic)}}" class="img-fluid" alt="Responsive image">
            </div>
            <div class="modal-footer">
                <p>{{ $paintingDetails->description }}</p>
                {{-- This gallery.html need to be replaced with some blade page --}}
                <a class="btn btn-primary" href="{{route('show.painting',['painting'=>$paintingDetails->id])}}"
                    role="button">Go to
                    Auction</a>
            </div>
        </div>
    </div>
</div>