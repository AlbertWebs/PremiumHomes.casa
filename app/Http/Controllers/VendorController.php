<?php

namespace App\Http\Controllers;

use Pesapal;
use Illuminate\Http\Request;
use App\Http\Requests;
use Illuminate\Support\Facades\Auth;


class VendorController extends Controller
{
    public function index()
    {
        return view('vendor.index');
    }

    public function user_profile()
    {
        return view('vendor.user_profile');
    }

    public function my_listings()
    {
        return view('vendor.my_listings');
    }

    public function add_property(){
        return view('vendor.add_property');
    }

    public function payment_method(){
        return view('vendor.payment_method');
    }

    public function invoices(){
        return view('vendor.invoices');
    }

    public function invoice(){
        return view('vendor.invoice');
    }

    public function change_password(){
        return view('vendor.change_password');
    }

    public function add_properties(Request $request){
        $data = $request->all();
        dd($data);
        $Property = new Property;
        $title = $request->title;
        $property_description = $request->property_description;


    }



}
