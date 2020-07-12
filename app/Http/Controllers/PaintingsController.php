<?php

namespace App\Http\Controllers;

use App\Paintings;
use Illuminate\Http\Request;

class PaintingsController extends Controller
{
    /**
     * index
     *
     * @return void
     */
    public function index()
    {
        $paintings = Paintings::all();

        return view('paintings.index', compact('paintings'));
    }

    public function show(Paintings $painting)
    {
        // $painting = Paintings::findOrFail(request('painting'));

        return view('paintings.show', compact('painting'));
    }

    public function store()
    {
        $validAttr = request()->validate([
            'title'             => 'required',
            'subtitle'          => 'required',
            'description'       => 'required',
            'painting_pic'      => 'required',
            'starting_price'    => 'required',
            'ending_date'       => 'required'
        ]);
        Paintings::create($validAttr);
        //redirect
        return redirect('/paintings');
    }
}
