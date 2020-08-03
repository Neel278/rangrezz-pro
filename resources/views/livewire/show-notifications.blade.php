<li>
    <a wire:click="readed" href="{{route('show.painting',['painting'=>$notification->data['painting']])}}">
        <div class="icon-circle bg-light-green">
            <i class="material-icons">event_available</i>
        </div>
        <div class="menu-info">
            <h4>{{$notification->data['data']}}</h4>
            <p>
                <i class="material-icons">access_time</i> {{ $notification->created_at->diffForHumans() }}
            </p>
        </div>
    </a>
</li>