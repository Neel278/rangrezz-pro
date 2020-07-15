<?php

namespace App\Http\Controllers;

use App\Http\Requests\UpdateUserBasicSettings;
use Illuminate\Support\Facades\DB;

class UserSettingsController extends Controller
{
    public function index()
    {
        return view('user.settings');
    }
    public function basicSettingsUpdate(UpdateUserBasicSettings $updated_data)
    {
        // dd(request());
        $validAttr = $updated_data->validated();
        $user = DB::table('users')->where('id', auth()->id());
        // dd($user);
        $user->update($validAttr);
        return redirect()->back()->with('success_basic', 'Details Updated Successfully !!');
    }
}
