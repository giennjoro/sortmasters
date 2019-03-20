<?php

namespace App\Providers;
use App\Event;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Schema;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        Schema::defaultStringLength(191);
        view()->composer('*',function($view) {
            $global_events = Event::orderBy('created_at', 'DESC')->where('expiry_date', '>=', date('Y-m-d H:i:s'))->orWhere('expiry_date', null)->get()->take(3);
            $view->with('global_events', $global_events);
        });
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
