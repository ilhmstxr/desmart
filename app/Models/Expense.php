<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Expense extends Model
{
    use HasFactory;

    protected $fillable = [
        'expense_number',
        'category',
        'description',
        'amount',
        'expense_date',
        'vendor_name',
        'payment_method',
        'status',
        'field_id',
        'crop_id',
        'receipt_path',
        'notes',
        'created_by',
    ];

    protected $casts = [
        'expense_date' => 'date',
    ];

    public function field()
    {
        return $this->belongsTo(Field::class);
    }

    public function crop()
    {
        return $this->belongsTo(Crop::class);
    }

    public function createdBy()
    {
        return $this->belongsTo(User::class, 'created_by');
    }

    protected static function boot()
    {
        parent::boot();

        static::creating(function ($expense) {
            $expense->expense_number = 'EXP-' . date('Y') . '-' . str_pad(static::count() + 1, 6, '0', STR_PAD_LEFT);
        });
    }
}
