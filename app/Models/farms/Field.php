<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Field extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'size',
        'soil_type',
        'ph_level',
        'coordinates',
        'irrigation_status',
        'last_tested',
        'farm_id',
    ];

    protected $casts = [
        'last_tested' => 'date',
    ];

    public function farm()
    {
        return $this->belongsTo(Farm::class);
    }

    public function crops()
    {
        return $this->hasMany(Crop::class);
    }
}
