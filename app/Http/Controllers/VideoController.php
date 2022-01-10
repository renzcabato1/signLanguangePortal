<?php

namespace App\Http\Controllers;
use App\Sign;
use Illuminate\Http\Request;

class VideoController extends Controller
{
    //
 
    public function view()
    {
        $signs = Sign::get();
        return view('video',
        array(
            'subheader' => '',
            'header' => "Faqs",
            'signs' => $signs,
        ));
    }
}
