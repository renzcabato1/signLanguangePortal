<?php

namespace App\Http\Controllers;
use App\Message;
use App\Faq;
use App\Team;
use Illuminate\Http\Request;
use App\Notifications\SendMessage;

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
        $message->notify(new SendMessage($message));
        $request->session()->flash('status','Successfully submitted.');
        return redirect('/#contact'); 
    }
    public function home()
    {
        $teams = Team::get();
        $faqs = Faq::get();
        return view('welcome',
        array(
            'teams' => $teams,
            'faqs' => $faqs,
        ));

    }
    public function messages()
    {
        $messages = Message::orderBy('created_at','desc')->get();
       
        return view('messages',
        array(
            'subheader' => '',
            'header' => "Messages",
            'messages' => $messages,
        ));
    }
}
