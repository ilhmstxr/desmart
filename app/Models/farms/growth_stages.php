<?php

namespace App\Models\farms;

use Database\Factories\growthStagesFactory;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class growth_stages extends Model
{

    use HasFactory;

    protected $table = 'growth_stages';
    protected $fillable = [
        'stage_name',
        'description',
    ];

    public function crop()
    {
        return $this->hasMany(Crop::class);
    }
    protected static function newFactory()
    {
        // Langsung menunjuk ke class factory yang benar
        return growthStagesFactory::new();
    }
}
