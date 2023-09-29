<?php

namespace Knox\Pesapal;

use Illuminate\Support\Facades\Request as Input;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Pesapal;
use Session;

class PesapalAPIController extends Controller
{

    function handleCallback(){
        $merchant_reference = Input::get('pesapal_merchant_reference');
        $tracking_id = Input::get('pesapal_transaction_tracking_id');
        $route = env('PESAPAL_CALLBACK_ROUTE');

        Session::put('pesapal_tracking_id', $tracking_id);
        Session::put('pesapal_reference_id', $merchant_reference);
        // dd(Session::get('pesapal_tracking_id'));
        return redirect("webhooks/donepayment/?pesapal_tracking_id=".$tracking_id."&merchant_reference=".$merchant_reference."");
    }

    function handleIPN(){
        $notification_type = Input::get('pesapal_notification_type');
        $merchant_reference = Input::get('pesapal_merchant_reference');
        $tracking_id = Input::get('pesapal_transaction_tracking_id');
        Pesapal::redirectToIPN($notification_type,$merchant_reference,$tracking_id);
    }

}
