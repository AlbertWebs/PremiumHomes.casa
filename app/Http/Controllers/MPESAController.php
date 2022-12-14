<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\MpesaTransaction;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Log;
use Carbon\Carbon;
use App\Models\STKMpesaTransaction;

class MPESAController extends Controller
{
    public function printCredentials(){
        $MPESA_CONSUMER_KEY = env('MPESA_CONSUMER_KEY');
        $MPESA_CONSUMER_SECRET = env('MPESA_CONSUMER_SECRET');
        echo $MPESA_CONSUMER_SECRET;
        echo "<br>";
        echo $MPESA_CONSUMER_KEY;
    }

    public function generateAccessToken()
    {
        $consumer_key = env('MPESA_CONSUMER_KEY');
        $consumer_secret = env('MPESA_CONSUMER_SECRET');
        $credentials = base64_encode($consumer_key.":".$consumer_secret);
        $url = "https://api.safaricom.co.ke/oauth/v1/generate?grant_type=client_credentials";
        $curl = curl_init();
        curl_setopt($curl, CURLOPT_URL, $url);
        curl_setopt($curl, CURLOPT_HTTPHEADER, array("Authorization: Basic $credentials"));
        curl_setopt($curl, CURLOPT_HEADER, false);
        curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
        $curl_response = curl_exec($curl);
        $access_token=json_decode($curl_response);
        return $access_token->access_token;
    }


    public function mpesaRegisterUrls()
    {
        $url = "https://api.safaricom.co.ke/mpesa/c2b/v2/registerurl";
        $credentials = $this->generateAccessToken();
        $curl = curl_init();
        curl_setopt($curl, CURLOPT_URL, $url);
        curl_setopt($curl, CURLOPT_HTTPHEADER, array("Content-Type:application/json","Authorization:Bearer ".$credentials));
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($curl, CURLOPT_POST, true);
        curl_setopt($curl, CURLOPT_POSTFIELDS, json_encode(array(
            "ShortCode" => "4101843",
            "ResponseType" => "Completed",
            "ConfirmationURL" => "https://premiumhomes.casa/api/v1/transaction/confirmation",
            "ValidationURL" => "https://premiumhomes.casa/api/v1/validation"
        )));
        $curl_response = curl_exec($curl);
        dd($curl_response);
    }

    public function mpesaConfirmation(Request $request)
    {
        $content=json_decode($request->getContent());
        Log::info($request->getContent());

        $mpesa_transaction = new MpesaTransaction();
        $mpesa_transaction->TransactionType = $content->TransactionType;
        $mpesa_transaction->TransID = $content->TransID;
        $mpesa_transaction->TransTime = $content->TransTime;
        $mpesa_transaction->TransAmount = $content->TransAmount;
        $mpesa_transaction->BusinessShortCode = $content->BusinessShortCode;
        $mpesa_transaction->BillRefNumber = $content->BillRefNumber;
        $mpesa_transaction->InvoiceNumber = $content->InvoiceNumber;
        $mpesa_transaction->OrgAccountBalance = $content->OrgAccountBalance;
        $mpesa_transaction->ThirdPartyTransID = $content->ThirdPartyTransID;
        $mpesa_transaction->MSISDN = $content->MSISDN;
        $mpesa_transaction->FirstName = $content->FirstName;
        $mpesa_transaction->MiddleName = "**";
        $mpesa_transaction->LastName = "**";
        $mpesa_transaction->save();

        // Responding to the confirmation request
        $response = new Response;
        $response->headers->set("Content-Type","text/xml; charset=utf-8");
        $response->setContent(json_encode(["C2BPaymentConfirmationResult"=>"Success"]));
        return $response;
    }

    public function mpesaValidation(Request $request)
    {
        $result_code = "0";
        $result_description = "Accepted validation request.";
        return $this->createValidationResponse($result_code, $result_description);
    }

    public function lipaNaMpesaPassword()
    {
        $lipa_time = Carbon::rawParse('now')->format('YmdHms');
        $passkey = "b4c6f325639c7339e4e99f43349efee360c3546c3640000180d4d02c64430f92";
        $BusinessShortCode = 4101843;
        $timestamp =$lipa_time;
        $lipa_na_mpesa_password = base64_encode($BusinessShortCode.$passkey.$timestamp);
        return $lipa_na_mpesa_password;
    }

    public function customerMpesaSTKPush(Request $request)
    {
        $phoneNumber = $request->phone_number;
        $AmountSTK = $request->Amount;
        $AccountReference = $request->AccountReference;
        $TransactionDesc = $request->TransactionDesc;
        $url = 'https://api.safaricom.co.ke/mpesa/stkpush/v1/processrequest';
        $curl = curl_init();
        curl_setopt($curl, CURLOPT_URL, $url);
        curl_setopt($curl, CURLOPT_HTTPHEADER, array('Content-Type:application/json','Authorization:Bearer '.$this->generateAccessToken()));
        $curl_post_data = [
            //Fill in the request parameters with valid values
            'BusinessShortCode' => 4101843,
            'Password' => $this->lipaNaMpesaPassword(),
            'Timestamp' => Carbon::rawParse('now')->format('YmdHms'),
            'TransactionType' => 'CustomerPayBillOnline',
            'Amount' => $AmountSTK,
            'PartyA' => $phoneNumber, // replace this with your phone number
            'PartyB' => 4101843,
            'PhoneNumber' => $phoneNumber, // replace this with your phone number
            'CallBackURL' => 'https://premiumhomes.casa/api/v1/stk/push_call_back',
            'AccountReference' => $request->TransactionDesc,
            'TransactionDesc' => "Testing stk push on sandbox"
        ];
        $data_string = json_encode($curl_post_data);
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($curl, CURLOPT_POST, true);
        curl_setopt($curl, CURLOPT_POSTFIELDS, $data_string);
        $curl_response = curl_exec($curl);

        // dd($curl_response);

        // Insert MerchantRequestID
        $curl_content=json_decode($curl_response);
        $mpesa_transaction = new STKMpesaTransaction();
        $mpesa_transaction->CheckoutRequestID =  $curl_content->CheckoutRequestID;
        $mpesa_transaction->MerchantRequestID =  $curl_content->MerchantRequestID;
        $mpesa_transaction->user_id =  "1";
        $mpesa_transaction->save();

        Log::info($curl_response);
        $CheckoutRequestID = $curl_content->CheckoutRequestID;
        $table = 'lnmo_api_response';
        return $this->checklast($CheckoutRequestID,$table,$curl_response);
    }



    public function customerMpesaSTKPushCallBack(Request $request){
        Log::info($request->getContent());
        $content=json_decode($request->getContent(), true);
            $CheckoutRequestID = $content['Body']['stkCallback']['CheckoutRequestID'];

            $nameArr = [];
            foreach ($content['Body']['stkCallback']['CallbackMetadata']['Item'] as $row) {

                if(empty($row['Value'])){
                    continue;
                }
                $nameArr[$row['Name']] = $row['Value'];
            }
            DB::table('lnmo_api_response')->where('CheckoutRequestID',$CheckoutRequestID)->update($nameArr);
            $updateStatus = array(
                'status' =>1
            );
            DB::table('lnmo_api_response')->where('CheckoutRequestID',$CheckoutRequestID)->update($updateStatus);

        // Keep some evidence as a file
        Log::info($request->getContent());

        $response = new Response;
        $response->headers->set("Content-Type","text/xml; charset=utf-8");
        $response->setContent(json_encode(["STKPUSHPaymentConfirmationResult"=>"Success"]));
        return $response;
    }

    public function checklast($AccID,$table,$curl_response){
        $table = 'lnmo_api_response';
        if($table == 'lnmo_api_response'){
            $TableData = DB::table('lnmo_api_response')->where('CheckoutRequestID', $AccID)->where('status','1')->get();
            if($TableData->isEmpty()){
                sleep(10);
                // sleep & initaiate recursion
                return $this->checklast($AccID,$table,$curl_response);
            }else{
                return $curl_response;
            }
        }else{
            return response()->json(array('success' => 'Done'));
        }
    }
}
