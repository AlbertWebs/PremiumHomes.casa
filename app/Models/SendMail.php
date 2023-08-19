<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Invoice;
use Mail;

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
              $subject = "Invoice Number $Invoice->invoice_number";
              $FromVariable = "hello@premiumhomes.casa";
              $FromVariableName = "Premium Homes";

              $toVariable = $email;
              $toVariableName = $name;

              Mail::send('invoice', $data, function($message) use ($subject,$FromVariable,$FromVariableName,$toVariable,$toVariableName){
                  $message->from($FromVariable , $FromVariableName);
                  $message->to($toVariable, $toVariableName)->cc('albertmuhatia@gmail.com')->cc('info@designekta.com')->subject($subject);
              });
          }

          public static function bookAppointment($numberOfPeople,$full_name,$email_address,$phone_number,$reservation_time,$reservation_date,$agent_email,$agent_name){
            //The Generic mailler Goes here
            $messageee = 'Hello, You have a booked appointement from '.$full_name.', Email: '.$email_address.', Phone Number: '.$phone_number.'  for date: '.$reservation_date.' at '.$reservation_time.' for '.$numberOfPeople.' People ';
            $subject = "New Appointment";
            $data = array(
                'content'=>$messageee,
                'name'=>$agent_name,
                'email'=>$agent_email,
                'subject'=>$subject,
            );

            $subject = "$subject";

            $SenderEmail = "info@premiumhomes.casa";
            $SenderName = "Premium Business Den Limited";

            $toVariable = $agent_email;

            $toVariableName = $agent_name;


            Mail::send('mailTheme', $data, function($message) use ($subject,$SenderEmail,$SenderName,$toVariable,$toVariableName){
                $message->from($toVariable , $toVariableName);
                $message->to($toVariable, $toVariableName)->cc('info@premiumhomes.casa')->bcc('albertmuhatia@gmail.com')->replyTo($toVariable, $toVariableName)->subject($subject);
            });
        }
}
