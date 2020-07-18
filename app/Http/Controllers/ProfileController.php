<?php

namespace App\Http\Controllers;

use App\Paintings;
use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function index()
    {
        $paintings = Paintings::where('owner_id', auth()->id())->take(2)->get();
        return view('user.profile', compact('paintings'));
    }
}
