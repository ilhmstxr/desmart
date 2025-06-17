<?php

namespace App\Models\farms;

use Database\Factories\cropFactory;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Crop extends Model
{
    use HasFactory;

    protected $table = 'crops';

    protected $fillable = [
        'plant_variety_id',
        'current_stage_id',
        'field_id',
        'area',
        'planted_date',
        'expected_harvest_date',
    ];

    protected $casts = [
        'planted_date' => 'date',
        'expected_harvest_date' => 'date',
        'area' => 'decimal:2'
    ];


    public function field()
    {
        return $this->belongsTo(Field::class);
    }

    public function plantVariety()
    {
        return $this->belongsTo(plant_varieties::class);
    }
    public function currentStage()
    {
        return $this->belongsTo(growth_stages::class);
    }
      protected static function newFactory()
    {
        // Langsung menunjuk ke class factory yang benar
        return cropFactory::new();
    }
}
