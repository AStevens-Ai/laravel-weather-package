<?php

use Illuminate\Support\Facades\Route;
use Alex\WeatherApi\Http\Controllers\WeatherController;

Route::get('/weather', [WeatherController::class, 'getWeather']);

Route::get('/forecast', [WeatherController::class, 'getForecast']);
