<?php

namespace App\Models\finances;

use Database\Factories\marketplacesFactory;
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

    protected static function newFactory()
    {
        // Langsung menunjuk ke class factory yang benar
        return marketplacesFactory::new();
    }
}
