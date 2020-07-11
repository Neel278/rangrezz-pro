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

    public function store()
    {
        // validate
        //persist
        Paintings::create(request(['title', 'subtitle', 'description', 'painting_pic', 'starting_price', 'ending_date']));
        //redirect
        return redirect('/paintings');
    }
}