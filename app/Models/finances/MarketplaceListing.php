<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MarketplaceListing extends Model
{
    use HasFactory;

    protected $fillable = [
        'product_id',
        'marketplace_name',
        'listing_price',
        'quantity_listed',
        'quantity_sold',
        'status',
        'listed_date',
        'expiry_date',
        'listing_notes',
        'commission_rate',
    ];

    protected $casts = [
        'listed_date' => 'date',
        'expiry_date' => 'date',
    ];

    public function product()
    {
        return $this->belongsTo(Product::class);
    }

    public function sales()
    {
        return $this->hasMany(Sale::class);
    }

    public function getRemainingQuantityAttribute()
    {
        return $this->quantity_listed - $this->quantity_sold;
    }

    public function isExpired()
    {
        return $this->expiry_date && $this->expiry_date < now();
    }
}
