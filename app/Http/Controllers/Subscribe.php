<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\URL;

use Newsletter;

class Subscribe extends Controller
{
    function subscribe(Request $request) {
        $email = $request->input('email');

        if(Newsletter::isSubscribed($email)) {
            Session::flash('newsletter-message', 'You are already subscribed');        
        } else {
            Session::flash('newsletter-message', 'You have been subscribed to our Newsletter!');
            Newsletter::subscribe($email);
        }

        // return Redirect::to(URL::previous() . "#whatever");
        return redirect()->to(url()->previous() . '#newsletter');
        // return redirect()->back();
    }
}
