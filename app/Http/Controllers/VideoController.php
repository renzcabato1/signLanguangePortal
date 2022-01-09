<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class VideoController extends Controller
{
    //
    public function view()
    {
        return view('video',
        array(
            'subheader' => '',
            'header' => "Faqs",
        ));
    }
}
