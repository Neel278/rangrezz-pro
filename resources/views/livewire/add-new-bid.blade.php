<div>
    <h5>Current Highest bid :</h5>
    <p>
        {{ $painting->bidding_price > 0 ? $painting->bidding_price : $painting->starting_price }}$
    </p>
    <form wire:submit.prevent="submit">
        @csrf
        <label for="bid">
            Bid
        </label>
        <div class="form-group">
            <div class="form-line">
                <input type="number"
                    min="{{ $painting->bidding_price > 0 ? $painting->bidding_price + 1: $painting->starting_price +1 }}"
                    value="{{ $painting->bidding_price > 0 ? $painting->bidding_price + 1: $painting->starting_price + 1}}"
                    name="bidamount" wire:model="newBid" class="form-control" />
            </div>
        </div>
        <button id="bid" class="btn btn-info" name="bid" type="submit">
            Bid
        </button>
    </form>
</div>