<?php

namespace App\Http\Controllers;

use App\Chatting;
use App\Events\NewMessage;
use App\Paintings;
use Illuminate\Http\Request;

class ChattingController extends Controller
{
    public function index(Paintings $painting)
    {
        if (!$painting->status) {
            return abort(403, 'This Painting is not sold Yet!');
        }
        if (!(auth()->id() == $painting->owner_id || auth()->id() == $painting->bidder_id)) {
            return abort(403, 'You are not authorize to chat here!');
        }
        return view('chat.index', compact('painting'));
    }
    public function show(Paintings $painting)
    {
        return Chatting::where('paintings_id', $painting->id)->with('user')->get();
    }
    public function store(Request $request, Paintings $painting)
    {
        $message = $painting->messages()->create([
            'message' => $request->message,
            'user_id' => auth()->id(),
        ]);

        $message = Chatting::where('id', $message->id)->with('user')->first();
        // $message = $message->toJson();
        // return $message->toJson();
        broadcast(new NewMessage($message))->toOthers();
        return ['status' => 'success!'];
    }
}
