<?php

namespace App\Http\Controllers;
use App\Sign;
use DB;
use Illuminate\Http\Request;

class SignController extends Controller
{
    //
    public function sign()
    {
        $signs = Sign::get();
        return view('signs',
        array(
            'subheader' => '',
            'header' => "Signs",
            'signs' => $signs,
        ));
    }
    public function newSign(Request $request)
    {
        $newsign = new Sign;
        $newsign->text = $request->text;
        $file = $request->image;
        $original_name = str_replace(' ', '',$file->getClientOriginalName());
        $name = time().'_'.$original_name;
        
        $file->move(public_path().'/images/', $name);
        $file_name = '/images/'.$name;
        $ext = pathinfo(storage_path().$file_name, PATHINFO_EXTENSION);
        $newsign->image = $file_name;
        $newsign->save();

        $request->session()->flash('status','Successfully created');
        return back();
    }
    public function delsign(Request $request)
    {
        DB::table('signs')
        ->where('id', $request->id)
        ->delete();

        echo "Success";
    }
}
