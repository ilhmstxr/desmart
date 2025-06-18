<?php

namespace App\Models\farms;

use App\Models\farms\Field;
use App\Models\User;
use Database\Factories\farmFactory;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Farm extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'description',
        'location',
        'total_area',
        'owner_id',
        'status',
        'farm_photo_path',
        'boundary',
    ];

    public function owner()
    {
        return $this->belongsTo(User::class, 'owner_id');
    }

    public function fields()
    {
        return $this->hasMany(Field::class);
    }

    protected static function newFactory()
    {
        // Langsung menunjuk ke class factory yang benar
        return farmFactory::new();
    }
}
