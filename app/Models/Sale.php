<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sale extends Model
{
    use HasFactory;

    protected $fillable = [
        'sale_number',
        'product_id',
        'marketplace_listing_id',
        'customer_name',
        'customer_email',
        'customer_phone',
        'quantity_sold',
        'unit_price',
        'total_amount',
        'commission_amount',
        'net_amount',
        'payment_status',
        'delivery_status',
        'sale_date',
        'delivery_date',
        'notes',
        'created_by',
    ];

    protected $casts = [
        'sale_date' => 'date',
        'delivery_date' => 'date',
    ];

    public function product()
    {
        return $this->belongsTo(Product::class);
    }

    public function marketplaceListing()
    {
        return $this->belongsTo(MarketplaceListing::class);
    }

    public function createdBy()
    {
        return $this->belongsTo(User::class, 'created_by');
    }

    protected static function boot()
    {
        parent::boot();

        static::creating(function ($sale) {
            $sale->sale_number = 'SALE-' . date('Y') . '-' . str_pad(static::count() + 1, 6, '0', STR_PAD_LEFT);
        });
    }
}
