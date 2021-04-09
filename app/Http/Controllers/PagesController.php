<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Helpers\ServicesData;
use App\Helpers\FAQData;


class PagesController extends Controller
{
    // Pages 

    function index() {
        //Get Services
        $services = new ServicesData();
        $data = $services->get_services();
        return view('pages/home')->with('services', $data);
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

    function services(Request $request, $service) {   
        // Get Single Service
        $services = new ServicesData();
        $services->check_service_route($service);
        $data = $services->get_single_service($service);

        return view('pages/services')->with('service', $data);
    }
}
