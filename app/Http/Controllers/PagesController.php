<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Helpers\ServicesData;

class PagesController extends Controller
{
    // Pages 

    function index() {
        return view('pages/home');
    }

    function about() {
        $staff = [
            (object) [
                'name' => 'loretta',
                'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cupiditate fugiat impedit, voluptatum quibusdam et ut aperiam illum hic iusto porro eaque consequuntur! Aperiam eius quod eveniet optio rem nam obcaecati?',
                'bgPicture' => 'service3',
            ],
            (object) [
                'name' => 'roman',
                'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cupiditate fugiat impedit, voluptatum quibusdam et ut aperiam illum hic iusto porro eaque consequuntur! Aperiam eius quod eveniet optio rem nam obcaecati?',
                'bgPicture' => 'service4',
            ],
        ];
        
        return view('pages/about')->with('staff', $staff);
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
        // echo($data);

        return view('pages/services')->with('service', $data);
    }
}
