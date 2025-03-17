<?php

use Illuminate\Support\Facades\Route;
use Alex\LaravelWeatherApi\Http\Controllers\WeatherController;

Route::get('/weather', [WeatherController::class, 'getWeather']);
