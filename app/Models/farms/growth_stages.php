<?php

namespace App\Models;

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
}
