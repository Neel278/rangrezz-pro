<div>
    @if (auth()->user()->likes()->where('painting_id',$painting_id)->first())
    @if (auth()->user()->likes()->where('painting_id',$painting_id)->first()->liked === 1)
    <a href="#" wire:click.prevent=likes>
        <i class="material-icons">favorite</i>
        <span>Liked</span>
    </a>
    @else
    <a href="#" wire:click.prevent=likes>
        <i class="material-icons">favorite_border</i>
        <span>Like</span>
    </a>
    @endif
    @else
    <a href="#" wire:click.prevent=likes>
        <i class="material-icons">favorite_border</i>
        <span>Like</span>
    </a>
    @endif
</div>