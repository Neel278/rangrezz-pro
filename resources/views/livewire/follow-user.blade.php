<div style="margin-top: 50%">
    {{-- {{dd(auth()->user()->followed()->where('followed_id',$followed_id)->first())}} --}}
    @if (auth()->user()->followed()->where('followed_id',$followed_id)->first())
    {{-- @if (auth()->user()->likes()->where('followed_id',$followed_id)->first()->liked === 1) --}}
    <a href="#" wire:click.prevent=follow><i class="material-icons">person</i></a>
    @else
    <a href="#" wire:click.prevent=follow><i class="material-icons">person_outline</i></a>
    @endif
    {{-- @else
    <a href="#" wire:click.prevent=follow><i class="material-icons">person_outline</i></a>
    @endif
    <a href="#" wire:click.prevent=follow><i class="material-icons">person_outline</i></a> --}}
</div>