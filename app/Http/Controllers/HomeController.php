<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Property;

class HomeController extends Controller
{

    public function index()
    {
        $Property = Property::all();
        $PropertyRent = Property::where('Status','Rent')->get();
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
        $Property = Property::where('Status',$id)->get();
        return view('front.properties',compact('id','Property'));
    }

    public function properties_agent($id){
        $Property = Property::where('user_id',$id)->get();
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
        return view('front.property', compact('Property','title','description'));
    }




}
