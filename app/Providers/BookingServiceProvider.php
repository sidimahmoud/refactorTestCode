<?php 
namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class BookingServiceProvider extends ServiceProvider {

    /**
     * Register BookingService class with the Laravel IoC container.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind('BookingService', function()
        {
            return new \App\Services\BookingService;
        });
    }

}