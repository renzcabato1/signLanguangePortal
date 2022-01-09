<?php

namespace App\Http\Controllers;
use App\Faq;
use DB;
use Illuminate\Http\Request;

class FaqController extends Controller
{
    //
    public function faq()
    {
        $faqs = Faq::get();
        return view('faqs',
        array(
            'subheader' => '',
            'header' => "Faqs",
            'faqs' => $faqs,
        ));
    }
    public function newfaq(Request $request)
    {
        $faq = new Faq;
        $faq->question = $request->question;
        $faq->answer = $request->answer;
        $faq->save();
        $request->session()->flash('status','Successfully saved');
        return back();
    }
    public function deleteFaq(Request $request)
    {
        DB::table('faqs')
        ->where('id', $request->id)

        ->delete();

        echo "Success";
    }
    public function editFaq(Request $request,$id)
    {
        $faq = Faq::where('id',$id)->first();;
        $faq->question = $request->question;
        $faq->answer = $request->answer;
        $faq->save();
        $request->session()->flash('status','Successfully updated');
        return back();

    }
}
