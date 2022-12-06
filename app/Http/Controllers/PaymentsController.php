<?php

namespace App\Http\Controllers;

use Pesapal;
use Illuminate\Http\Request;
use App\Http\Requests;
use Illuminate\Support\Facades\Auth;
use App\Models\Payment;

class PaymentsController extends Controller
{
    public function payment(Request $request){//initiates payment
        $payments = new Payment;
        $payments -> businessid = 1; //Business ID
        $payments -> transactionid = Pesapal::random_reference();
        $payments -> status = 'NEW'; //if user gets to iframe then exits, i prefer to have that as a new/lost transaction, not pending
        $payments -> amount = $request->Amount;
        $payments -> save();

        $details = array(
            'amount' => $payments -> amount,
            'description' => $request->TransactionDesc,
            'type' => 'MERCHANT',
            'first_name' => $request->name,
            'last_name' => '*',
            'email' => $request->email,
            'phonenumber' => $request->mobile,
            'reference' => $payments -> transactionid,
            'height'=>'400px',
            //'currency' => 'USD'
        );
        $iframe=Pesapal::makePayment($details);

        return view('payments.business.pesapal', compact('iframe'));
    }
    public function paymentsuccess(Request $request)
    {
        $trackingid = $request->input('tracking_id');
        $ref = $request->input('merchant_reference');

        $payments = Payment::where('transactionid',$ref)->first();
        $payments -> trackingid = $trackingid;
        $payments -> status = 'PENDING';
        $payments -> save();
        $payments=Payment::all();
        return view('payments.business.home', compact('payments'));
    }
    public function paymentconfirmation(Request $request)
    {
        $trackingid = $request->input('pesapal_transaction_tracking_id');
        $merchant_reference = $request->input('pesapal_merchant_reference');
        $pesapal_notification_type= $request->input('pesapal_notification_type');
        $this->checkpaymentstatus($trackingid,$merchant_reference,$pesapal_notification_type);
    }

    public function checkpaymentstatus($trackingid,$merchant_reference,$pesapal_notification_type){
        $status=Pesapal::getMerchantStatus($merchant_reference);
        $payments = Payment::where('trackingid',$trackingid)->first();
        $payments -> status = $status;
        $payments -> payment_method = "PESAPAL";
        $payments -> save();
        return "success";
    }
}
