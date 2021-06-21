<?php

namespace pipeDev\laravelPaystack;
use Illuminate\Support\ServiceProvider;
use PipeDev\LaravelPaystack\Services\LaravelPaystack;

class LaravelPaystackServiceProvider extends ServiceProvider {

    /**
     * Register services.
     *
     * @return void
     */

    public function register(){
        $this->app->bind('LaravelPaystack', function () {

            return new LaravelPaystack();
        });
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot(){

    }

    /**
    * Get the services provided by the provider
    * @return array
    */
    public function provides()
    {
        return ['LaravelPaystack'];
    }

}