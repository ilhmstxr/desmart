<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;


class Sale extends Model
{
    use HasFactory;

    protected $fillable = [
        'sale_number',
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
        'processed_by_user_id',
    ];

    protected $casts = [
        'sale_date' => 'datetime',
        'delivery_date' => 'datetime',
    ];

    // --- RELASI ---

    public function listing()
    {
        return $this->belongsTo(MarketplaceListing::class, 'marketplace_listing_id');
    }

    public function processor()
    {
        return $this->belongsTo(User::class, 'processed_by_user_id');
    }

    // --- BOOT METHOD ---

    protected static function boot()
    {
        parent::boot();

        // Logika pembuatan nomor unik yang lebih aman
        static::creating(function ($sale) {
            if (empty($sale->sale_number)) {
                $date = now()->format('Ymd');
                $random = Str::upper(Str::random(6));
                $random = Str::upper(Str::random(6));
                $sale->sale_number = "SALE-{$date}-{$random}";
            }
        });
    }
}
