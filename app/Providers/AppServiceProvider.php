<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;


class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
      $this->publishes([
          __DIR__.'/vendor/components/jquery/jquery.slim.js' => public_path('vendor/components/jquery'),
      ], 'public');
        //
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
