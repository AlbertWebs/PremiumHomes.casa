<?php

namespace App\Http\Controllers;

use Pesapal;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Models\Property;
use App\Models\Gallery;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;
use DB;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File;
use Redirect;
use Session;

class VendorController extends Controller
{
    public function index()
    {
        $active = "home";
        $MyListings = DB::table('properties')->where('user_id',Auth::user()->id)->get();
        return view('vendor.index',compact('MyListings','active'));
    }

    public function user_profile()
    {
        $active = "profile";
        return view('vendor.user_profile',compact('active'));
    }

    public function my_listings()
    {
        $active = "properties";
        $MyListings = DB::table('properties')->where('user_id',Auth::user()->id)->get();
        return view('vendor.my_listings', compact('MyListings','active'));
    }

    public function add_property(){
        $active = "add_property";
        return view('vendor.add_property', compact('active'));
    }

    public function payment_method(){
        $active = "payment_method";
        return view('vendor.payment_method', compact('active'));
    }

    public function invoices(){
        $MyListings = DB::table('properties')->where('user_id',Auth::user()->id)->get();
        $active = "invoices";
        return view('vendor.invoices', compact('active','MyListings'));
    }

    public function invoice(){
        return view('vendor.invoice');
    }

    public function change_password(){
        return view('vendor.change_password');
    }

    public function add_gallery($id){
        $active = "Add Gallery";
        $Latest = Property::where('id',$id)->get();
        return view('vendor.add_gallery',compact('Latest','active'));
    }

    public function update_gallery($id){
        $active = "Update Gallery";
        $MyGallery = Gallery::where('property_id',$id)->get();
        return view('vendor.my_gallery',compact('MyGallery','active'));
    }


    public function delete_property($id){
        $Property = Property::find($id);
        $GetGallery = DB::table('galleries')->where('property_id',$id)->get();
        foreach($GetGallery as $getGallery){
            $path = "images/$getGallery->filename";
            $image_path = public_path("images/$getGallery->filename");
            if (File::exists($image_path)) {
                File::delete($image_path);
            }
        }
        $DeleteGallery = DB::table('galleries')->where('property_id',$id)->where('user_id',Auth::User()->id)->delete();
        $Property->delete();
        return Redirect::back();
    }

    public function delete_gallery($id){
        $GetGallery = DB::table('galleries')->where('id',$id)->get();
        foreach($GetGallery as $getGallery){
            $path = "images/$getGallery->filename";
            $image_path = public_path("images/$getGallery->filename");
            if (File::exists($image_path)) {
                File::delete($image_path);
            }
        }
        $DeleteGallery = DB::table('galleries')->where('id',$id)->where('user_id',Auth::User()->id)->delete();
        return Redirect::back();
    }



    public function downgrade($id){

    }

    public function upgrade($id){
        $active = "payment_method";
        return view('vendor.packages', compact('active'));
    }


    public function add_properties(Request $request){
        $data = $request->all();
        if (!empty($request->featured_image)) {
            $file =$request->file('featured_image');
            $extension = $file->getClientOriginalExtension();
            $filename = time().'.' . $extension;
            $file->move(public_path('uploads/properties/'), $filename);
            $data['image']= 'public/uploads/'.$filename;
        }
        $Property = new Property;
        $Property->property_name = $request->property_name;
        $Property->property_id = Str::random(40);
        $Property->slung = Str::slug($request->property_name);
        $Property->property_description = $request->property_description;
        $Property->status = $request->status;
        $Property->featured_image = $filename;
        $Property->user_id = Auth::User()->id;
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
        $Property->swimming = $request->swimming;
        $Property->heater = $request->heater;
        $Property->laundry = $request->laundry;
        $Property->gym = $request->gym;
        $Property->alarm = $request->alarm;
        $Property->window_covering = $request->window_covering;
        $Property->refrigerator = $request->refrigerator;
        $Property->cable = $request->cable;
        $Property->microwave = $request->microwave;
        $Property->parking = $request->parking;
        $Property->dishwasher = $request->dishwasher;
        $Property->balcony = $request->balcony;
        $Property->internet = $request->internet;
        $Property->iframe = $request->iframe;
        $Property->video = $request->video;
        $Property->save();
        //Get Latest
        $Latest = Property::orderBy('created_at','DESC')->first();
        return redirect()->route('add_gallery', [$Latest->id]);
    }

    public function edit_properties($id){
        $active = "properties";
        $Property = Property::find($id);
        return view('vendor.edit_properties',compact('Property','active'));
    }

    public function save_property_post(Request $request){
        $data = $request->all();
        if (!empty($request->featured_image)) {
            $file =$request->file('featured_image');
            $extension = $file->getClientOriginalExtension();
            $filename = time().'.' . $extension;
            $file->move(public_path('uploads/properties/'), $filename);
            $data['image']= 'public/uploads/'.$filename;
        }else{
            $filename = $request->featured_image_cheat;
        }
        $updateDetails = array(
            'featured_image' =>$filename,
            'property_name' =>$request->property_name,
            'slung' => Str::slug($request->property_name),
            'property_description' => $request->property_description,
            'status' => $request->status,
            'user_id' => Auth::User()->id,
            'type' => $request->type,
            'rooms' => $request->rooms,
            'price' => $request->price,
            'type' => $request->type,
            'sqft' => $request->sqft,
            'address' => $request->address,
            'city' => $request->city,
            'state' => $request->state,
            'country' => $request->country,
            'latitude' => $request->latitude,
            'longitude' => $request->longitude,
            'yom' => $request->yom,
            'ac' => $request->ac,
            'swimming' => $request->swimming,
            'heater' => $request->heater,
            'laundry' => $request->laundry,
            'gym' => $request->gym,
            'alarm' => $request->alarm,
            'window_covering' => $request->window_covering,
            'refrigerator' => $request->refrigerator,
            'cable' => $request->cable,
            'microwave' => $request->microwave,
            'parking' => $request->parking,
            'dishwasher' => $request->dishwasher,
            'balcony' => $request->balcony,
            'internet' => $request->internet,
            'iframe' => $request->iframe,
            'video' => $request->video,
        );

        $Update = DB::table('properties')->where('id',$request->PropertyID)->update($updateDetails);
        if($Update){
            Session::flash('message', "Property has been updated");
            return Redirect::back();
        }else{
            Session::flash('message', "Nothing to update");
            return Redirect::back();
        }
    }


}
