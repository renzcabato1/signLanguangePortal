<?php

namespace App\Http\Controllers;
use App\User;
use Illuminate\Http\Request;

class AccountController extends Controller
{
    //
    public function users()
    {
        $users = User::get();
        return view('users',
        array(
            'subheader' => '',
            'header' => "Users",
            'users' => $users,
        ));
    }
    public function new_account(Request $request)
    {
        $this->validate($request, [
            'name' => 'required|min:3|max:50',
            'email' => 'email|unique:users',
            'password' => 'required|confirmed|min:6',
        ]);

        $new_account = new User;
        $new_account->name = $request->name;
        $new_account->email = $request->email;
        $new_account->role = 1;
        $new_account->password = bcrypt($request->password);
        $new_account->save();
        $request->session()->flash('status','Successfully created');
        return back();

    }
}
