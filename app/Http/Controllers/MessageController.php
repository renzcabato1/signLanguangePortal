<?php

namespace App\Http\Controllers;
use App\Message;
use App\Team;
use Illuminate\Http\Request;

class MessageController extends Controller
{
    //
    public function sendMessage(Request $request)
    {
        $message = new Message;
        $message->name = $request->name;
        $message->email = $request->email;
        $message->subject = $request->subject;
        $message->message = $request->message;
        $message->save();

        $request->session()->flash('status','Successfully submitted.');
        return redirect('/#contact'); 
    }
    public function home()
    {
        $teams = Team::get();
        return view('welcome',
        array(
            'teams' => $teams,
        ));

    }
}
