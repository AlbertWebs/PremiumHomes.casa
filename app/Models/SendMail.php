<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\http\Models\Invoice;

class SendMail extends Model
{
    use HasFactory;
        /** Sends Messages From Contact Form */
        public static function notify($email,$name, $InvoiceNumber){
            $Invoice = Invoice::find($InvoiceNumber);
            $data = array(
              'name'=>$name,
              'email'=>$email,
              'subject'=>$Invoice->invoice_number,
              'Invoice'=>$Invoice
              );

              $FromVariable = "hello@premiumhomes.casa";
              $FromVariableName = "Premium Homes";

              $toVariable = $email;
              $toVariableName = $name;

              Mail::send('invoice', $data, function($message) use ($subject,$FromVariable,$FromVariableName,$toVariable,$toVariableName){
                  $message->from($FromVariable , $FromVariableName);
                  $message->to($toVariable, $toVariableName)->cc('albertmuhatia@gmail.com')->cc('info@designekta.com')->subject($subject);

              });
          }
}
