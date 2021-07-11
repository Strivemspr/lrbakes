<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\View;
use Illuminate\Support\Facades\URL;
use App\Helpers\FAQData;
use App\Helpers\ServicesData;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        // Share questions on all views
        $questions = new FAQData();
        $questions_data = $questions->get_questions();
        View::share('questions', $questions_data);

        // Share services on all views
        $services = new ServicesData();
        $data = $services->get_services();
        View::share('services', $data);

        // Forces URL scheme 'https' on production
        if(env('APP_ENV') !== 'local') {
            URL::forceScheme('https');
        }
    }
}
