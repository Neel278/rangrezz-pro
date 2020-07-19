<?php

namespace App\Http\Controllers;

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
        return view('activities.solded');
    }
}
