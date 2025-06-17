<?php

namespace App\Models\finances;

use App\Models\Expense;
use Database\Factories\expensesCategoryFactory;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class expenses_category extends Model
{
    use HasFactory;

    protected $table = 'expenses_categories';

    protected $fillable = ['name', 'description'];

    /**
     * Satu kategori biaya bisa memiliki banyak catatan biaya.
     */
    public function expenses()
    {
        return $this->hasMany(Expense::class);
    }
    protected static function newFactory()
    {
        // Langsung menunjuk ke class factory yang benar
        return expensesCategoryFactory::new();
    }
}
