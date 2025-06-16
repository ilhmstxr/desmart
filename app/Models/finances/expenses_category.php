<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class expenses_category extends Model
{
     use HasFactory;

    protected $table = 'expense_categories';

    protected $fillable = ['name', 'description'];

    /**
     * Satu kategori biaya bisa memiliki banyak catatan biaya.
     */
    public function expenses()
    {
        return $this->hasMany(Expense::class);
    }
}
