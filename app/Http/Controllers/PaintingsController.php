<?php

namespace App\Http\Controllers;

use App\Paintings;
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
        $paintings = Paintings::all();

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
            'painting_pic'      => 'required',
            'starting_price'    => 'required',
            'ending_date'       => 'required',
        ]);
        // $validAttr['owner_id'] = auth()->id();

        auth()->user()->paintings()->create($validAttr);

        //redirect
        return redirect('/paintings');
    }
}
