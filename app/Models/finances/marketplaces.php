<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class marketplaces extends Model
{
     use HasFactory;

    protected $fillable = ['name', 'url', 'is_active'];

    protected $casts = [
        'is_active' => 'boolean',
    ];

    /**
     * Satu marketplace bisa memiliki banyak listingan.
     */
    public function listings()
    {
        return $this->hasMany(MarketplaceListing::class);
    }
}
