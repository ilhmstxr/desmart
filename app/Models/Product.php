<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'sku',
        'description',
        'price_per_unit',
        'unit_type',
        'stock_quantity',
        'minimum_stock',
        'status',
        'category',
        'images',
        'cost_per_unit',
        'crop_id',
        'created_by',
    ];

    protected $casts = [
        'images' => 'array',
    ];

    public function crop()
    {
        return $this->belongsTo(Crop::class);
    }

    public function createdBy()
    {
        return $this->belongsTo(User::class, 'created_by');
    }

    public function marketplaceListings()
    {
        return $this->hasMany(MarketplaceListing::class);
    }

    public function sales()
    {
        return $this->hasMany(Sale::class);
    }

    public function isLowStock()
    {
        return $this->stock_quantity <= $this->minimum_stock;
    }

    public function getProfitMarginAttribute()
    {
        if (!$this->cost_per_unit) return 0;
        return (($this->price_per_unit - $this->cost_per_unit) / $this->price_per_unit) * 100;
    }

    public function getTotalRevenueAttribute()
    {
        return $this->sales()->where('payment_status', 'paid')->sum('total_amount');
    }
}
