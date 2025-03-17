<?php

namespace Alex\LaravelWeatherApi\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Routing\Controller;

class WeatherController extends Controller
{
    public function getWeather(Request $request)
    {
        $city = $request->input('city');
        $api_key = config('api-key');
        $base_url = config('base_url');

        $response = Http::get($base_url, [
            'q' => $city,
            'key' => $api_key,
        ]);

        if ($response->failed()) {
            return response()->json(['error' => 'Failed to fetch weather data'], 500);
        }

        return response()->json($response->json());
    }
}
