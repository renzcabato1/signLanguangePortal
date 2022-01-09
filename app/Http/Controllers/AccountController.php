<?php

namespace App\Http\Controllers;
use App\User;
use DB;
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
    public function delete_account(Request $request)
    {
       
        DB::table('Users')
        ->where('id', $request->id)

        ->delete();

        echo "Success";

    }
    public function changepassword(Request $request,$id)
    {
        $this->validate($request, [
            'password' => 'required|confirmed|min:6',
        ]);

        $user = User::where('id',$id)->first();
        $user->password = bcrypt($request->password);
        $user->save(); 
        $request->session()->flash('status','Successfully change password');
        return back();

    }
}
