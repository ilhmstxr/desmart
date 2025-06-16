<?php

namespace App\Models;

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
}
