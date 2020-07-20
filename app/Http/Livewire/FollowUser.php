<?php

namespace App\Http\Livewire;

use App\Follow;
use Illuminate\Support\Facades\DB;
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
        $auth_id = auth()->id();
        if ($auth_id != $this->followed_id) {
            $follow = DB::table('follows')->where([['follower_id', $auth_id], ['followed_id', $this->followed_id]])->first();
            if ($follow) {
                Follow::where('id', $follow->id)->delete();
            } else {
                Follow::create([
                    'followed_id' => $this->followed_id,
                    'follower_id' => $auth_id
                ]);
            }
        }
    }
    public function render()
    {
        return view('livewire.follow-user');
    }
}
