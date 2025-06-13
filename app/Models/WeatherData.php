<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class WeatherData extends Model
{
    use HasFactory;

    protected $fillable = [
        'location',
        'latitude',
        'longitude',
        'temperature',
        'humidity',
        'rainfall',
        'wind_speed',
        'wind_direction',
        'pressure',
        'condition',
        'description',
        'recorded_at',
    ];

    protected $casts = [
        'recorded_at' => 'datetime',
    ];

    public function scopeRecent($query, $hours = 24)
    {
        return $query->where('recorded_at', '>=', now()->subHours($hours));
    }

    public function scopeForLocation($query, $location)
    {
        return $query->where('location', $location);
    }
}
