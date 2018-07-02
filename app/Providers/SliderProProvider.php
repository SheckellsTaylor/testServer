<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class SliderProProvider extends ServiceProvider
{
    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }

    /**
     * Register services.
     *
     * @return void
     */
    public function generate_slider()
    {

      $slider = new SliderPro();
      $slider->setId('my-slider');
      $slider->setOptions([
              'sliderOptions' => [
                      'width'  => 960,
                      'height' => 500,
                      'arrows' => true,
                      'init'   => new \Edofre\SliderPro\JsExpression("
                  function() {
                      console.log('slider is initialized');
                  }
              "),
              ]
      ]);
    
        //
    }
}
