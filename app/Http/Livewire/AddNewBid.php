<?php

namespace App\Http\Livewire;

use Livewire\Component;

class AddNewBid extends Component
{
    public $newBid;
    public $painting;
    public function mount($painting)
    {
        // dd($painting);
        $this->painting = $painting;
        // dd($painting->bidding_price);
        $this->newBid = $painting->bidding_price > 0 ? $painting->bidding_price + 1 : $painting->starting_price + 1;
    }
    public function submit()
    {
        // dd($this->newBid, $this->painting->id);
        // $painting = Paintings::findOrFail($this->painting->id);
        $painting_price = $this->painting->bidding_price > 0 ? $this->painting->bidding_price : $this->painting->starting_price;
        if ($this->newBid > $painting_price) {
            // dd($this->newBid);
            $this->painting->update([
                'bidding_price' => $this->newBid,
                'bidder_id' => auth()->id()
            ]);
            $this->newBid = $this->painting->bidding_price + 1;
            session()->flash('message', 'Bidded successfully updated.');
        } else {
            session()->flash('error-message', 'Please add more amount.');
        }
    }

    public function render()
    {
        return view('livewire.add-new-bid');
    }
}
