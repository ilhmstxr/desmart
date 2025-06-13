<?php

namespace App\Http\Controllers;

use App\Models\WeatherData;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class WeatherController extends Controller
{
    public function index()
    {
        $currentWeather = WeatherData::latest('recorded_at')->first();
        $recentWeather = WeatherData::recent(168)->orderBy('recorded_at', 'desc')->take(24)->get(); // Last 7 days, 24 records
        $locations = WeatherData::distinct('location')->pluck('location');
        
        return view('weather.index', compact('currentWeather', 'recentWeather', 'locations'));
    }

    public function fetchWeather(Request $request)
    {
        $request->validate([
            'location' => 'required|string',
            'latitude' => 'required|numeric',
            'longitude' => 'required|numeric',
        ]);

        // This is a mock weather API call - replace with actual weather service
        $weatherData = $this->mockWeatherAPI($request->location, $request->latitude, $request->longitude);
        
        WeatherData::create([
            'location' => $request->location,
            'latitude' => $request->latitude,
            'longitude' => $request->longitude,
            'temperature' => $weatherData['temperature'],
            'humidity' => $weatherData['humidity'],
            'rainfall' => $weatherData['rainfall'],
            'wind_speed' => $weatherData['wind_speed'],
            'wind_direction' => $weatherData['wind_direction'],
            'pressure' => $weatherData['pressure'],
            'condition' => $weatherData['condition'],
            'description' => $weatherData['description'],
            'recorded_at' => now(),
        ]);

        return redirect()->route('weather.index')->with('success', 'Weather data updated successfully!');
    }

    private function mockWeatherAPI($location, $lat, $lng)
    {
        // Mock weather data - replace with actual API call
        $conditions = ['sunny', 'cloudy', 'partly_cloudy', 'rainy', 'stormy'];
        $directions = ['N', 'NE', 'E', 'SE', 'S', 'SW', 'W', 'NW'];
        
        return [
            'temperature' => rand(15, 35),
            'humidity' => rand(40, 90),
            'rainfall' => rand(0, 20),
            'wind_speed' => rand(5, 25),
            'wind_direction' => $directions[array_rand($directions)],
            'pressure' => rand(1000, 1030),
            'condition' => $conditions[array_rand($conditions)],
            'description' => 'Mock weather data for ' . $location,
        ];
    }

    public function history(Request $request)
    {
        $location = $request->get('location');
        $days = $request->get('days', 7);
        
        $query = WeatherData::where('recorded_at', '>=', now()->subDays($days))
                           ->orderBy('recorded_at', 'desc');
        
        if ($location) {
            $query->where('location', $location);
        }
        
        $weatherHistory = $query->paginate(50);
        $locations = WeatherData::distinct('location')->pluck('location');
        
        return view('weather.history', compact('weatherHistory', 'locations', 'location', 'days'));
    }
}
