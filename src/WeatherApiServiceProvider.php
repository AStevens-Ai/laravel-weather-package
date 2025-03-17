<?php

namespace Alex\WeatherApi;

use Illuminate\Support\ServiceProvider;

class WeatherApiServiceProvider extends ServiceProvider
{
    public function register()
    {
        $this->mergeConfigFrom(__DIR__ . '/config/weather.php', 'weather-api');
    }

    public function boot()
    {
        $this->loadRoutesFrom(__DIR__ . '/routes/api.php');
        $this->publishes([__DIR__ . '/config/weather.php' => config_path('weather.php'),], 'config');
    }
}
