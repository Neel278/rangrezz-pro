<?php

namespace App\Http\Controllers;

use App\Paintings;
use App\User;

class ProfileController extends Controller
{
    public function index()
    {
        $paintings = Paintings::where('owner_id', auth()->id())->take(2)->with('owner')->get();
        return view('user.profile', compact('paintings'));
    }
    public function show($username)
    {
        if ($username != auth()->user()->username) {
            $user = User::whereUsername($username)->firstOrFail();
            $paintings = Paintings::where('owner_id', $user->id)->take(2)->get();
            return view('user.show', compact(['user', 'paintings']));
        } else {
            return redirect('/profile');
        }
    }
}
