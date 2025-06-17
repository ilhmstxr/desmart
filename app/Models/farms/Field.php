<?php

namespace App\Models\farms;

use Database\Factories\fieldFactory;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Field extends Model
{
    use HasFactory;

    protected $fillable = [
        'farm_id',
        'name',
        'size',
        'soil_type',
        'ph_level',
        'coordinates',
        'irrigation_status',
        'last_tested',
        'altitude',
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

    protected static function newFactory()
    {
        // Langsung menunjuk ke class factory yang benar
        return fieldFactory::new();
    }
}
