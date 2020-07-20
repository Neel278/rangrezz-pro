<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;

class WelcomeController extends Controller
{
    public function index()
    {
        $paintings = DB::table('paintings')->orderBy('created_at', 'desc')->take(5)->get();
        return view('welcome', compact('paintings'));
    }
}
