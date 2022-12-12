<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Invoice;
use App\Models\User;
use App\Models\SendMail;
use DB;
use Mail;

class InvoiceController extends Controller
{
    public function create(Request $request){
        $Invoices = DB::table('invoices')->orderBy('id','DESC')->Limit('1')->get();
        $count_invoices = count($Invoices);
        if($count_invoices == 0){
            $InvoiceNumber = 'Premium-1';
        }else{
            foreach($Invoices as $invoice)
            {
                $LastID = $invoice->id;
                $Next = $LastID+1;
                $InvoiceNumber = "Premium-".$Next;
            }
        }
        // Log to DB
        request()->request->add(['invoice_number'=>$InvoiceNumber]);
        $Invoice = Invoice::create($request->all());
        $User = User::find($request->user_id);
        if($Invoice->save()){
            $InvoiceGetNumber = Invoice::where('invoice_number',$InvoiceNumber)->get();
            foreach($InvoiceGetNumber as $InvNo){
                SendMail::notify($User->email,$User->name,$InvNo->id);
            }
        }
        //Ajax Return Success
        return response()->json(array('success' => 'Done'));

    }
}

