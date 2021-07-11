<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Log;

class ContactController extends Controller
{
    function sendMail(Request $request) {
        // dd(implode(" ",$request->get('message')));
        // print_r($request->message);
        // echo($request->all());

        Validator::extend('without_spaces', function($attr, $value){
            return preg_match('/^\S*$/u', $value);
        }, "Write the :attribute field without empty spaces");

        $validator = Validator::make($request->all(), [
            'name' => 'required',
            'email' => 'required|email:rfc,dns',
            'number' => 'required|without_spaces|numeric:7,20',
            'subject' => 'required|min:3',
            'message' => 'required|min:20',
        ]);

        if ($validator->fails()) {
            return redirect()->to(url()->previous() . '#contact-form')->withErrors($validator)->withInput();
        }

        Mail::send('templates.contact_email',
            array(
                'name' => $request->get('name'),
                'email' => $request->get('email'),
                'number' => $request->get('number'),
                'subject' => $request->get('subject'),
                'user_message' => $request->get('message'),
            ), 
            function($message) use ($request) {
                $message->from($request->email);
                $message->to(env('MAIL_USERNAME'));
            }
        );

        return redirect()->to(url()->previous() . '#contact-form')->with('success', 'Thank you for contacting us. Follow us on social media to keep up to date!');
    }
}
