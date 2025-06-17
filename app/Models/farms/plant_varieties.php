<?php

namespace App\Models\farms;

use Database\Factories\plantVarietiesFactory;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class plant_varieties extends Model
{
    use HasFactory;

    protected $table = 'plant_varieties';
    protected $fillable = [
        'plant_name',
        'variety_name',
        'description',
    ];


    public function crop()
    {
        return $this->hasMany(Crop::class);
    }
    protected static function newFactory()
    {
        // Langsung menunjuk ke class factory yang benar
        return plantVarietiesFactory::new();
    }
}
