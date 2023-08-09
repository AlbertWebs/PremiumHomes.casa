<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Property;
use Illuminate\Support\Facades\Auth;
use App\Models\PostView;

class HomeController extends Controller
{

    public function index()
    {
        $Property = Property::all();
        $PropertyRent = Property::where('Status','Rent')->where('active','Approved')->get();
        return view('front.index', compact('Property','PropertyRent'));
    }

    public function invoice()
    {
        $subject = "Subject";
        $name = "Albert Muhatia";
        return view('invoice', compact('subject','name'));
    }

    public function search(){
        return view('front.search');
    }

    public function properties($id){
        $Property = Property::where('Status',$id)->where('active','Approved')->get();
        return view('front.properties',compact('id','Property'));
    }

    public function properties_agent($id){
        $Property = Property::where('user_id',$id)->where('active','Approved')->get();
        return view('front.properties_agent',compact('id','Property'));
    }

    public function plots($id){
        $Property = Property::where('slung',$id)->get();
        return view('front.plots',compact('id'));
    }

    public function privacy(){
        return view('front.privacy');
    }

    public function terms(){
        return view('front.terms');
    }

    public function copyright(){
        return view('front.copyright');
    }
    public function soon(){
        return view('front.soon');
    }

    public function property($slung){
        $Property = Property::where('slung',$slung)->get();
        foreach($Property as $prop){
            $title = $prop->property_name;
            $description = "$prop->property_name located at  $prop->address listed for $prop->status";
        }
        // Count Views
        $PostID = $prop->id;
        $PostSlung = $slung;
        $url = "https://premiumhomes.casa/properties/$slung";
        $session_id = 0;
        if(Auth::User()){
            $user_id = Auth::User()->id;
        }else{
            $user_id = $session_id;
        }
        $ip = request()->ip();
        $user_agent = request()->userAgent();

        $PostView = new PostView;
        $PostView->post_id = $PostID;
        $PostView->titleslug = $PostSlung;
        $PostView->url = $url;
        $PostView->session_id = $session_id;
        $PostView->user_id = $user_id;
        $PostView->ip = $ip;
        $PostView->agent = $user_agent;
        $PostView->save();
        // dd($user_agent);
        return view('front.property', compact('Property','title','description'));
    }



    public function schedule_post(Request $request){
        $numberOfPeople = $request->quant[1];
        $full_name = $request->full_name;
        $email_address = $request->email_address;
        $phone_number = $request->phone_number;
        return "Done";
    }

}
