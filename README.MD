# Laravel Weather API Package

This package provides an easy way to fetch current weather and forecast data using the [WeatherAPI.com](https://www.weatherapi.com/) service in Laravel applications.

## Installation

## 1. put github link into your project repositories array inside of your composer.json:
```json
"repositories": [
        {
            "type": "vcs",
            "url": "https://github.com/astevens-ai/laravel-weather-package"
        }
    ]
```
## 2. Require the package in your Laravel project:  
```sh
composer require astevens-ai/laravel-weather-package:dev-main
```
## 3. Publish the configuration file:
```sh
php artisan vendor:publish --tag=config
```
## 4. Add the required environment variables in your .env file (including your own api key for the weather):
```ini
WEATHER_API_KEY=your_api_key_here
WEATHER_BASE_URL=http://api.weatherapi.com/v1
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
GET /weather?city=knoxville
```

## 2. Get Weather Forecast:
```http
GET /forecast
```

### Query Params:
city - The name of the city to fetch weather for.
days - The days to fetch the forecast for.

```http
GET /forecast?city=knoxville&days=2
```


## Registered Routes
Be aware that these routes are now technically in your project as they have been autoloaded into the laravel project, if you wish to change the routes you can navigate to the dependency under vendor/astevens-ai/laravel-weather-package to change them
``` php
use Alex\WeatherApi\Http\Controllers\WeatherController;

Route::get('/weather', [WeatherController::class, 'getWeather']);
Route::get('/forecast', [WeatherController::class, 'getForecast']);
```
