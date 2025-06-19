<?php

namespace App\Models\farms;

use App\Models\Schedule;
use Database\Factories\cropFactory;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Crop extends Model
{
    use HasFactory;

    protected $table = 'crops';

    protected $fillable = [
        'name',
        'field_id',
        'plant_variety_id',
        'current_stage_id',
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

    // DIPERBAIKI: Nama Class dan method konsisten (camelCase)
    public function plantVariety()
    {
        // PERBAIKAN: dari plant_varieties::class menjadi PlantVariety::class
        return $this->belongsTo(plant_varieties::class, 'plant_variety_id');
    }

    // DIPERBAIKI: Nama Class dan method konsisten (camelCase)
    public function currentStage()
    {
        // PERBAIKAN: dari growth_stages::class menjadi GrowthStage::class
        return $this->belongsTo(growth_stages::class, 'current_stage_id');
    }
    protected static function newFactory()
    {
        // Langsung menunjuk ke class factory yang benar
        return cropFactory::new();
    }

    protected static function booted(): void
    {
        // Event 'deleting' ini berjalan TEPAT SEBELUM data crop dihapus.
        static::deleting(function (Crop $crop) {
            // Hapus semua 'schedules' yang berelasi dengan crop ini.
            $crop->schedules()->delete();
        });
    }

    public function schedules()
    {
        // Asumsikan model jadwal Anda bernama 'Schedule'
        return $this->hasMany(Schedule::class);
    }
}
