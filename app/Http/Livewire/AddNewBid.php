<?php

namespace App\Http\Livewire;

use App\Paintings;
use Livewire\Component;

class AddNewBid extends Component
{
    public $newBid;
    public $painting;
    public function mount($painting)
    {
        // dd($painting);
        $this->painting = $painting;
        $this->newBid = $painting->bidding_price > 0 ? $painting->bidding_price + 1 : $painting->starting_price + 1;
    }
    public function submit()
    {
        // dd($this->newBid, $this->painting->id);
        // $painting = Paintings::findOrFail($this->painting->id);
        $this->validate([
            'newBid' => 'required'
        ]);
        $painting_price = $this->painting->bidding_price > 0 ? $this->painting->bidding_price : $this->painting->starting_price;
        if ($this->newBid > $painting_price) {
            // dd($this->newBid);
            $this->painting->update([
                'bidding_price' => $this->newBid,
            ]);
            $this->newBid = $this->painting->bidding_price + 1;
            return redirect()->back()->with('success_bidding', 'Your bid added succesfully !!');
        } else {
            return redirect()->back()->withErrors(['Please Enter More amound than previous bid!!']);
        }
    }

    public function render()
    {
        return view('livewire.add-new-bid');
    }
}
