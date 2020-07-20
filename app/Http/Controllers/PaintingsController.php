<?php

namespace App\Http\Controllers;

use App\Like;
use App\Paintings;
use App\Sold;
use Illuminate\Http\Request;

class PaintingsController extends Controller
{
    /**
     * fetching all the painting and passing to index page
     *
     * @return void
     */
    public function index()
    {
        $paintings = Paintings::where('status', false)->latest()
            ->with('owner')
            ->withCount('likes')
            ->get();

        return view('paintings.index', compact('paintings'));
    }

    /**
     * on show view showing only other users paintings
     *
     * @param  mixed $painting
     * @return void
     */
    public function show(Paintings $painting)
    {
        if (auth()->user()->is($painting->owner)) {
            abort(403);
        }
        return view('paintings.show', compact('painting'));
    }

    public function create()
    {
        return view('paintings.create');
    }

    /**
     * storing a new painting
     *
     * @return void
     */
    public function store()
    {
        $validAttr = request()->validate([
            'title'             => 'required',
            'subtitle'          => 'required',
            'description'       => 'required',
            'starting_price'    => 'required',
            'painting_pic'      => 'required',
            'ending_date'       => 'required',
        ]);
        if (request('painting_pic')) {
            $validAttr['painting_pic'] = 'storage/' . request('painting_pic')->store('paintings');
        }
        // $validAttr['owner_id'] = auth()->id();

        auth()->user()->paintings()->create($validAttr);

        //redirect
        return redirect('/paintings');
    }
    public function update()
    {
        // dd(request('painting'));
        $painting = Paintings::find(request('painting'));
        if (date("Y-m-d") > date(request('ending_date'))) {
            // dd('here');
            $painting->update([
                'status' => 1
            ]);
            Sold::create([
                'owner_id' => $painting->owner_id,
                'painting_id' => $painting->id,
                'customer_id' => $painting->bidder_id == 0 ? $painting->owner_id : $painting->bidder_id,
            ]);
            return redirect()->route('paintings')->with('success_painting', 'Painting Sold');
        } else {
            // dd('there');
            return redirect()->back()->withErrors(['error_painting_sold' => 'Ending Date has not been finished yet !!']);;
        }
    }
}
