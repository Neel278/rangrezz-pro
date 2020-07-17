<?php

namespace App\Http\Livewire;

use Livewire\Component;

class FollowUser extends Component
{
    public $followed_id;
    public function mount($followed_id)
    {
        $this->followed_id = $followed_id;
    }
    public function follow()
    {
        //
    }
    public function render()
    {
        return view('livewire.follow-user');
    }
}
