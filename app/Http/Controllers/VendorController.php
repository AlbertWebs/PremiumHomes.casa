<?php

namespace App\Http\Controllers;

use Pesapal;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Models\Property;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;


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
        // Generate property_id

        $data = $request->all();
        // dd($data);
        $Property = new Property;
        $Property->property_name = $request->property_name;
        $Property->property_id = Str::random(40);
        $Property->slung = Str::slug($request->property_name);
        $Property->property_description = $request->property_description;
        $Property->status = $request->status;
        $Property->type = $request->type;
        $Property->rooms = $request->rooms;
        $Property->price = $request->price;
        $Property->type = $request->type;
        $Property->sqft = $request->sqft;
        $Property->address = $request->address;
        $Property->city = $request->city;
        $Property->state = $request->state;
        $Property->country = $request->country;
        $Property->latitude = $request->latitude;
        $Property->longitude = $request->longitude;
        $Property->yom = $request->yom;
        $Property->ac = $request->ac;
        $Property->pool = $request->swimming;
        $Property->heater = $request->heater;
        $Property->laundry = $request->laundry;
        $Property->gym = $request->gym;
        $Property->alarm = $request->alarm;
        $Property->window_covering = $request->window_covering;
        $Property->refrigerator = $request->refrigerator;
        $Property->cable = $request->cable;
        $Property->microwave = $request->microwave;
        $Property->save();
    }



}
