<?php

namespace Alex\WeatherApi\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Routing\Controller;

class WeatherController extends Controller
{
    public function getWeather(Request $request)
    {
        $city = $request->input('city');
        $api_key = config('weather.api-key');
        $base_url = config('weather.base_url');
        $request_url = $base_url . '/current.json';

        $response = Http::get($request_url, [
            'q' => $city,
            'key' => $api_key,
        ]);

        if ($response->failed()) {
            return response()->json(['error' => 'Failed to fetch weather data'], 500);
        }

        return response()->json($response->json());
    }

    public function getForecast(Request $request)
    {
        $days = $request->input('days');
        $city = $request->input('city');
        $api_key = config('weather.api-key');
        $base_url = config('weather.base_url');
        $request_url = $base_url . '/forecast.json';

        $response = Http::get($request_url, [
            'q' => $city,
            'key' => $api_key,
            'days' => $days,
        ]);

        if ($response->failed()) {
            return response()->json(['error' => 'Failed to fetch weather forcast'], 500);
        }

        return response()->json($response->json());
    }
}
