<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    function index() {
        return view('pages/home');
    }

    function about() {
        return view('pages/about');
    }

    function gallery() {
        return view('pages/gallery');
    }

    function contact() {
        return view('pages/contact');
    }
}
