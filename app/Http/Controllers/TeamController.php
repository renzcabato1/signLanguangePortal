<?php

namespace App\Http\Controllers;
use App\Team;
use App\Faq;
use DB;
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
    public function newDeveloper(Request $request)
    {
        $newTeam = new Team;
        $newTeam->name = $request->name;
        $newTeam->role = $request->role;
        $newTeam->facebook = $request->facebook;
        $newTeam->instagram = $request->instagram;
        $newTeam->linkedin = $request->linkedIn;
        $file = $request->image;
        $original_name = str_replace(' ', '',$file->getClientOriginalName());
        $name = time().'_'.$original_name;
        
        $file->move(public_path().'/images/', $name);
        $file_name = '/images/'.$name;
        $ext = pathinfo(storage_path().$file_name, PATHINFO_EXTENSION);
        $newTeam->image = $file_name;
        $newTeam->save();
        $request->session()->flash('status','Successfully created');
        return back();

    }
    public function delDev(Request $request)
    {
        DB::table('teams')
        ->where('id', $request->id)

        ->delete();

        echo "Success";
    }
}
