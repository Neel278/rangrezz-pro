<?php

namespace App\Http\Controllers;

use App\Comment;
use App\Events\NewComment;
use App\Paintings;
use Illuminate\Http\Request;

class CommentController extends Controller
{
    public function index(Paintings $painting)
    {
        return response()->json($painting->comments()->with('user')->latest()->get());
    }
    public function store(Request $request, Paintings $painting)
    {
        $validAttr = request()->validate([
            'body' => ['required', 'string', 'max:256'],
        ]);
        $comment = $painting->comments()->create([
            'body' => $validAttr['body'],
            'user_id' => auth()->id(),
        ]);

        $comment = Comment::where('id', $comment->id)->with('user')->first();

        broadcast(new NewComment($comment))->toOthers();

        return $comment->toJson();
    }
}
