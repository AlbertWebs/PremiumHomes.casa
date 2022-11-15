<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

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



}
