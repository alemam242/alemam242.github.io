<?php

namespace App\Http\Controllers;

use Exception;
use App\Mail\ContactMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class MailController extends Controller
{
    function sendEmail(Request $request){
        try{
        $email = env('GET_MAIL_TO','alemam242@gmail.com');

        // $name = $request->input('name');
        //     $userEmail = $request->input('email');
        //     $subject = $request->input('subject');
        //     $message = $request->input('body');
        $data = [
            'name' => $request->input('name'),
            'email' => $request->input('email'),
            'subject' => $request->input('subject'),
            'body' => $request->input('body')
        ];

        // Mail::to($email)->send(new ContactMail($name, $userEmail, $subject, $message));
        Mail::to($email)->send(new ContactMail($data));

        return response()->json(['message' => 'Success']);
    }catch(Exception $e){
        return response()->json(['message' => 'Failed'.' '.$e]);
    }
    }
}
