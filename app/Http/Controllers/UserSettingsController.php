<?php

namespace App\Http\Controllers;

use App\Http\Requests\UpdateUserBasicSettings;
use App\User;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserSettingsController extends Controller
{
    /**
     * To render the user settings page
     *
     * @return void
     */
    public function index()
    {
        return view('user.settings');
    }
    /**
     * To update the basic data of user
     *
     * @param  mixed $updated_data
     * @return void
     */
    public function basicSettingsUpdate(UpdateUserBasicSettings $updated_data)
    {
        // dd(request());
        $validAttr = $updated_data->validated();
        $user = DB::table('users')->where('id', auth()->id());
        // dd($user);
        $user->update($validAttr);
        return redirect()->back()->with('success_basic', 'Details Updated Successfully !!');
    }
    /**
     * To change the mail id with checking of password
     *
     * @return void
     */
    public function emailSettingsUpdate()
    {
        // dd(request()->all());
        $validAttr = request()->validate([
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
        ]);
        $user = User::find(auth()->id())->first();
        if (Hash::check(request('new_password'), $user->password)) {
            $user->update($validAttr);
            return redirect()->back()->with('success_email', 'Details Updated Successfully !!');
        } else {
            return redirect()->back()->withErrors(['email_password_wrong' => 'Please Enter Correct Password !!']);
        }
    }
    public function passwordSettingsUpdate()
    {
        // dd(request()->all());
        $validAttr = request()->validate(([
            'new_password' => ['required', 'string', 'min:8'],
        ]));
        $user = User::find(auth()->id())->first();
        if (request('pass') == request('pass_confirmation')) {
            if (Hash::check(request('pass'), $user->password)) {
                if (!Hash::check(request('new_password'), $user->password)) {
                    $user->update([
                        'password' => $validAttr['new_password'],
                    ]);
                    return redirect()->back()->with('success_password', 'Details Updated Successfully !!');
                } else {
                    return redirect()->back()->withErrors(['entered_old_password' => 'Please Enter New Password !!']);
                }
            } else {
                return redirect()->back()->withErrors(['entered_password_does_not_match_database' => 'Please Enter Correct Password !!']);
            }
        } else {
            return redirect()->back()->withErrors(['password_confirmation_failed' => 'Please Confirm Your Password !!']);
        }
    }
}
