<?php

namespace App\Http\Controllers;
use App\Team;
use App\Sign;
use App\Message;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $messages = Message::count();
        $signs = Sign::count();
        return view('home',
        array(
            'subheader' => 'Dashboards',
            'header' => "Home",
            'messages' => $messages,
            'signs' => $signs,
        ));
    }
}
