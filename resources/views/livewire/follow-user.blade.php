<div style="margin-top: 50%">
    @if (auth()->user()->followed()->where('followed_id',$followed_id)->first())
    <a href="#" wire:click.prevent=follow>
        <i class="material-icons">person</i>
        <span>Following</span>
    </a>
    @else
    <a href="#" wire:click.prevent=follow>
        <i class="material-icons">person_outline</i>
        <span>Follow</span>
    </a>
    @endif
</div>