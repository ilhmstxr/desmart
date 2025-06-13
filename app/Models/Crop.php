<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Crop extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'variety',
        'planted_date',
        'expected_harvest',
        'status',
        'area',
        'field_id',
    ];

    protected $casts = [
        'planted_date' => 'date',
        'expected_harvest' => 'date',
    ];

    public function field()
    {
        return $this->belongsTo(Field::class);
    }
}
