<?php

namespace App\Http\Controllers;

use App\Paintings;
use App\Sold;
use Illuminate\Http\Request;

class ActivitiesController extends Controller
{
    public function index()
    {
        return view('activities.index');
    }
    public function show()
    {
        // $solded_paintings = Sold::where('owner_id',auth()->id())->get();
        // dd($solded_paintings);
        $paintings = Paintings::where([['owner_id', auth()->id()], ['status', true]])->with('customer')->get();
        return view('activities.solded', compact('paintings'));
    }
    public function won_bids()
    {
        $paintings = Paintings::where([['bidder_id', auth()->id()], ['status', true], ['solded', false]])->with('owner')->get();
        return view('activities.won', compact('paintings'));
    }
}
