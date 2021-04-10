<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\View;
use App\Helpers\FAQData;

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
        $questions = new FAQData();
        $questions_data = $questions->get_questions();
        View::share('questions', $questions_data);

        if(env('APP_ENV') !== 'locel') {
            URL::forceScheme('https');
        }
    }
}
