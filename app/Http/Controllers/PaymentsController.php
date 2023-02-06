<?php

namespace App\Http\Controllers;

use Pesapal;
use Illuminate\Http\Request;
// use Illuminate\Support\Facades\Request;
use App\Http\Requests;
use Illuminate\Support\Facades\Auth;
use App\Models\Payment;
use Illuminate\Support\Facades\Input;


class PaymentsController extends Controller
{
    public function payment(Request $request){//initiates payment
        // dd(Request::all());
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
            'currency' => 'KES'
        );
        $iframe=Pesapal::makePayment($details);

        return view('payments.business.pesapal', compact('iframe'));
    }
    // public function paymentsuccess(Request $request)
    // {
    //     $trackingid = $request->input('tracking_id');
    //     $ref = $request->input('merchant_reference');

    //     $payments = Payment::where('transactionid',$ref)->first();
    //     $payments -> trackingid = $trackingid;
    //     $payments -> status = 'PENDING';
    //     $payments -> save();
    //     $payments=Payment::all();
    //     return view('payments.business.home', compact('payments'));
    // }
    public function paymentsuccess(Request $request)//just tells u payment has gone thru..but not confirmed
    {
        // send message
        $trackingid = $request->input('pesapal_transaction_tracking_id');
        $ref = $request->input('pesapal_merchant_reference');

        try {

            $this->sendSMS($trackingid,$ref);

          } catch (\Exception $e) {

              echo $e->getMessage();
          }


        $payments = Payment::where('transactionid',$ref)->first();
        $payments -> trackingid = $trackingid;
        $payments -> status = 'Confirmed';
        $payments -> save();
        //go back home
        $payments=Payment::all();
        return view('payment.thankyou', compact('payments'));
    }
    public function sendSMS($trackingid,$ref){
        $name = Session::get('UserName');
        $phone = Session::get('UserMobile');
        $message = "Hello $name, Your booking with tracking Id $trackingid has been received. Welcome to Villa Serene Hotel";
        $senderid = "DESIGNEKTA";

        $url = 'https://bulk.cloudrebue.co.ke/api/v1/send-sms';
        $token = "eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJpc3MiOiJodHRwczpcL1wvYnVsay5jbG91ZHJlYnVlLmNvLmtlXC8iLCJhdWQiOiJodHRwczpcL1wvYnVsay5jbG91ZHJlYnVlLmNvLmtlXC8iLCJpYXQiOjE2NTM5Nzc0NTEsImV4cCI6NDgwOTczNzQ1MSwiZGF0YSI6eyJlbWFpbCI6ImluZm9AZGVzaWduZWt0YS5jb20iLCJ1c2VyX2lkIjoiMTQiLCJ1c2VySWQiOiIxNCJ9fQ.N3y4QhqTApKi46YSiHmkaoEctO9z6Poc4k1g44ToyjA";

            $post_data=array(
            'sender'=>$senderid,
            'phone'=>$phone,
            'correlator'=>'Whatever',
            'link_id'=>null,
            'message'=>$message
            );

        $data_string = json_encode($post_data);
        $ch = curl_init( $url );
        curl_setopt( $ch, CURLOPT_POST, 1);
        curl_setopt( $ch, CURLOPT_POSTFIELDS, $data_string);
        curl_setopt( $ch, CURLOPT_FOLLOWLOCATION, 1);
        curl_setopt( $ch, CURLOPT_HEADER, 0);
        curl_setopt( $ch, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($ch, CURLOPT_HTTPHEADER,
            array(
                'Content-Type: application/json',
                'Accept: application/json',
                'Authorization:Bearer '.$token,
                'Content-Length: ' . strlen($data_string)
                )
            );

        $response = curl_exec($ch);
        curl_close($ch);
    }

    public function paymentconfirmation(Request $request)
    {
        $trackingid = Request::input('pesapal_transaction_tracking_id');
        $merchant_reference = Request::input('pesapal_merchant_reference');
        $pesapal_notification_type= Request::input('pesapal_notification_type');
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
