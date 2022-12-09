<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Models\Invoice;
use App\Http\Models\SendMail;


class InvoiceController extends Controller
{
    public function create(Request $request){
        $Invoices = DB::table('invoices')->orderBy('id','DESC')->Limit('1')->get();
        $count_invoices = count($Invoices);
        if($count_invoices == 0){
            $InvoiceNumber = 'PREMIUM-1';
        }else{
            foreach($Invoices as $invoice)
            {
                $LastID = $invoice->id;
                $Next = $LastID+1;
                $InvoiceNumber = "PREMIUM-".$Next;
            }
        }
        // Log to DB
        $Invoice = Invoice::create($request->all());
        $User = User::find($request->user_id);
        if($Invoice->save()){
            SendMail::notify($User->email,$User->name,$InvoiceNumber);
        }
        //Ajax Return Success
        return response()->json(array('success' => 'Done'));

    }
}

