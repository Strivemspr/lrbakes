<?php

namespace App\Helpers;
 
class ServicesData
{

    public $services;

    function __construct() {
        $this->services = [
            (object) [
                'service' => 'cakes',
                'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit ut aliquam, purus sit amet luctus venenatis, lectus magna fringilla urna, porttitor rhoncus dolor purus non enim praesent elementum facilisis leo, vel fringilla est ullamcorper eget nulla facilisi etiam dignissim diam quis.',
                'image' => '/images/service1.jpg',
                'images' => ['service1.jpg', 'service2.jpg', 'service3.jpg', 'service4.jpg'],
                'imageAlt' => 'Cake service',
            ],
            (object) [
                'service' => 'cheesecakes',
                'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit ut aliquam, purus sit amet luctus venenatis, lectus magna fringilla urna, porttitor rhoncus dolor purus non enim praesent elementum facilisis leo, vel fringilla est ullamcorper eget nulla facilisi etiam dignissim diam quis.',
                'image' => '/images/service2.jpg',
                'images' => ['service1.jpg', 'service2.jpg', 'service3.jpg', 'service4.jpg'],
                'imageAlt' => 'cheesecake service',
            ],
            (object) [
                'service' => 'cupcakes',
                'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit ut aliquam, purus sit amet luctus venenatis, lectus magna fringilla urna, porttitor rhoncus dolor purus non enim praesent elementum facilisis leo, vel fringilla est ullamcorper eget nulla facilisi etiam dignissim diam quis.',
                'image' => '/images/service3.jpg',
                'images' => ['service1.jpg', 'service2.jpg', 'service3.jpg', 'service4.jpg'],
                'imageAlt' => 'cupcake service',
            ],
            (object) [
                'service' => 'puligi',
                'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit ut aliquam, purus sit amet luctus venenatis, lectus magna fringilla urna, porttitor rhoncus dolor purus non enim praesent elementum facilisis leo, vel fringilla est ullamcorper eget nulla facilisi etiam dignissim diam quis.',
                'image' => '/images/service4.jpg',
                'images' => ['service1.jpg', 'service2.jpg', 'service3.jpg', 'service4.jpg'],
                'imageAlt' => 'puligi service',
            ],
        ];
    }

    public function get_services()
    {
        return $this->services;
    }

    public function get_single_service($service) {
        $data = $this->services;
        if($data) $key = array_search($service, array_column($data, 'service'));
        
        return $data[$key];
    }

    public function check_service_route($service) {
        if ($service !== 'cakes' && $service !== 'cheesecakes' && $service !== 'cupcakes' && $service !== 'puligi') {
            abort(404);
        }
    }
}