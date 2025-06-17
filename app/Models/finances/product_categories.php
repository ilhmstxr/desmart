<?php

namespace App\Models\finances;

use Database\Factories\productCategoryFactory;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class product_categories extends Model
{
    use HasFactory;

    protected $table = 'product_categories';

    protected $fillable = ['name', 'slug', 'description'];

    /**
     * Satu kategori bisa memiliki banyak produk.
     */
    public function products()
    {
        return $this->hasMany(Product::class);
    }

    protected static function newFactory()
    {
        // Langsung menunjuk ke class factory yang benar
        return productCategoryFactory::new();
    }
}
