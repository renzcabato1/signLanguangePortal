<?php

namespace App\Http\Controllers;
use App\Team;
use Illuminate\Http\Request;

class TeamController extends Controller
{
    //
    public function team()
    {
        $teams = Team::get();
        return view('team',
        array(
            'subheader' => '',
            'header' => "Team",
            'teams' => $teams,
        ));
    }
}
