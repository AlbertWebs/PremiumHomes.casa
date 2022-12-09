<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Property;

class HomeController extends Controller
{

    public function index()
    {
        return view('front.index');
    }

    public function invoice()
    {
        return view('invoice');
    }

    public function search(){
        return view('front.search');
    }

    public function properties($id){
        return view('front.properties',compact('id'));
    }

    public function plots($id){
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
        return view('front.property', compact('Property'));
    }


}
