<div>
    @if (auth()->user()->likes->where('painting_id',$painting_id)->first())
    @if (auth()->user()->likes->where('painting_id',$painting_id)->first()->liked)
    <a href="#" wire:click.prevent=likes>
        <i class="material-icons">favorite</i>
        <span>{{ $total_likes }}</span>
    </a>
    @else
    <a href="#" wire:click.prevent=likes>
        <i class="material-icons">favorite_border</i>
        <span>{{ $total_likes }}</span>
    </a>
    @endif
    @else
    <a href="#" wire:click.prevent=likes>
        <i class="material-icons">favorite_border</i>
        <span>{{ $total_likes }}</span>
    </a>
    @endif
</div>