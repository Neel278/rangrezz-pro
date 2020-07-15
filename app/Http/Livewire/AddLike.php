<?php

namespace App\Http\Livewire;

use App\Like;
use Illuminate\Support\Facades\DB;
use Livewire\Component;

class AddLike extends Component
{
    public $painting_id;
    public $painting;
    public $likes;
    public function mount($painting, $likes)
    {
        $this->painting = $painting;
        $this->painting_id = $painting->id;
        $this->likes = $likes;
    }
    public function likes()
    {
        $like = DB::table('likes')->where([['user_id', auth()->id()], ['painting_id', $this->painting_id]])->first();
        if ($like) {
            Like::where('id', $like->id)->delete();
            // dd($like);
        } else {
            Like::create([
                'user_id' => auth()->id(),
                'painting_id' => $this->painting_id,
                'liked' => true
            ]);
        }
    }
    public function render()
    {
        return view('livewire.add-like');
    }
}
