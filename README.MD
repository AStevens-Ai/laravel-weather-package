# Laravel Weather API Package

This package provides an easy way to fetch current weather and forecast data using the [WeatherAPI.com](https://www.weatherapi.com/) service in Laravel applications.

## Installation

## 1. Require the package in your Laravel project:  
```sh
composer require astevens-ai/laravel-weather-package:dev-main
```
## 2. Publish the configuration file:
```sh
php artisan vendor:publish --tag=weather-config
```
## 3. Add the required environment variables in your .env file:
```ini
WEATHER_API_KEY=your_api_key_here
WEATHER_BASE_URL=http://api.weatherapi.com/v1
```
## 4. Clear the config cache to apply changes:
```sh
php artisan config:clear
```


# Usage
This package provides two API endpoints:
## 1. Get Current Weather:
```http
GET /weather
```
### Query Params:
city - The name of the city to fetch weather for.

```http
GET /weather?city=Knoxville
```

## 2. Get Weather Forecast:
```http
GET /forecast
```

### Query Params:
city - The name of the city to fetch weather for.
days - The days to fetch the forecast for.

```http
GET /forecast?city=Los Angeles&days=3
```


## Registering Routes
To use these endpoints in your Laravel project, add the following to your routes/api.php:
``` php
use Alex\WeatherApi\Http\Controllers\WeatherController;

Route::get('/weather', [WeatherController::class, 'getWeather']);
Route::get('/forecast', [WeatherController::class, 'getForecast']);
```