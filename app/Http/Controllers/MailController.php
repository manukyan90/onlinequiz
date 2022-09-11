<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
//use App\Mail\SendMail;

class MailController extends Controller
{
    public function create()
    {
        return view('admin.mail.mailForm');
    }

    public function sendEmail(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'subject' => 'required',
            'name' => 'required',
            'message' => 'required',
        ]);

        $data = [
            'subject' => $request->subject,
            'name' => $request->name,
            'email' => $request->email,
            'message' => $request->message
        ];

        Mail::send('admin.mail.email-template', $data, function($message) use ($data) {
            $message->to($data['email'])
                ->subject($data['subject']);
        });

        return back()->with(['message' => 'Email successfully sent!']);
    }
}





//    public function send(Request $request){
//        $request->validate([
//            'name' => 'required',
//            'email' => 'required|email',
//            'message' => 'required'
//        ]);
//        $mail_data= [
//            'recipient' => 'onlinequiz2022@gmail.com',
//            'fromEmail' => $request->email,
//            'fromName' => $request->name,
//            'body' => $request->message
//            ];
//        Mail::send('mail-template', $mail_data, function ($message) use ($mail_data){
//            $message->to($mail_data['recipient'])
//                ->from($mail_data['fromEmail'],$mail_data['fromName']);
//
//        });
  //  }

//}
