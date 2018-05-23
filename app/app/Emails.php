<?php

namespace App;

use Mail;

class Emails
{
    public static function email_registration_user($email, $data){
        Mail::send('emails.email_user',  $data, function($message) use ($email){
            $message->from('infomanagernow@gmail.com', 'Welcome to riskmanagernow.site!');
            $message->to($email)
                     ->subject('Managernow.site Registration');
        });
    }

    public static function email_registration_admin( $data){
        Mail::send('emails.email_admin',  $data, function($message){
            $message->from('infomanagernow@gmail.com', 'Pending registration');
            $message->to('corporate.att@gmail.com')
                     ->subject('New Registration pending for review');
        });
    }

    public static function email_registration_user_approved($email, $data){
        Mail::send('emails.email_user_approved',  $data, function($message) use ($email){
            $message->from('infomanagernow@gmail.com', 'RiskManagerNow registration complete!');
            $message->to($email)
                     ->subject('Your registration has been accepted!');
        });
    }
}
