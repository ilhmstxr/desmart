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
        'base_price_per_unit',
        'unit_type',
        'stock_quantity',
        'minimum_stock',
        'status',
        'images',
        'cost_per_unit',
        'product_category_id',
        'crop_id',
        'created_by_user_id',
    ];

    protected $casts = [
        'images' => 'array',
    ];

    public function category()
    {
        return $this->belongsTo(product_categories::class, 'product_category_id');
    }

    public function crop()
    {
        return $this->belongsTo(Crop::class);
    }

    public function creator()
    {
        return $this->belongsTo(User::class, 'created_by_user_id');
    }

    public function listings()
    {
        return $this->hasMany(MarketplaceListing::class);
    }

    /**
     * Relasi untuk mengambil semua sales dari sebuah produk MELALUI listings.
     */
    public function sales()
    {
        return $this->hasManyThrough(Sale::class, MarketplaceListing::class);
    }

    // --- METHOD BANTU ---

    /**
     * Cek apakah stok produk rendah.
     */
    public function isLowStock(): bool
    {
        return $this->stock_quantity <= $this->minimum_stock;
    }

    // --- ACCESSOR & MUTATOR ---

    /**
     * Menghitung margin keuntungan.
     */
    public function getProfitMarginAttribute(): float
    {
        if (!$this->base_price_per_unit || $this->base_price_per_unit == 0) {
            return 0;
        }
        return (($this->base_price_per_unit - $this->cost_per_unit) / $this->base_price_per_unit) * 100;
    }

    /**
     * Menghitung total pendapatan dari produk ini.
     */
    public function getTotalRevenueAttribute(): float
    {
        // Catatan: Ini bisa menyebabkan N+1 query. Lihat penjelasan di bawah.
        return $this->sales()->where('payment_status', 'paid')->sum('total_amount');
    }
}
