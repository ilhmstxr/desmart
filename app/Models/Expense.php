<?php

namespace App\Models;

use App\Models\farms\Crop;
use App\Models\farms\Field;
use App\Models\finances\expenses_category;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Expense extends Model
{
    use HasFactory;
    protected $table = 'expenses';
    protected $fillable = [
        'expense_number',
        'expense_category_id',
        'description',
        'amount',
        'expense_date',
        'vendor_name',
        'payment_method',
        'status',
        'field_id',
        'crop_id',
        'receipt_path',
        'notes'
    ];

    protected $casts = [
        'expense_date' => 'datetime',
    ];

    // --- RELASI ---

    public function category()
    {
        return $this->belongsTo(expenses_category::class, 'expense_category_id');
    }

    public function field()
    {
        return $this->belongsTo(Field::class);
    }

    public function crop()
    {
        return $this->belongsTo(Crop::class);
    }

    // --- BOOT METHOD ---

    protected static function boot()
    {
        parent::boot();

        // Logika pembuatan nomor unik yang lebih aman
        static::creating(function ($expense) {
            if (empty($expense->expense_number)) {
                $date = now()->format('Ymd');
                $random = Str::upper(Str::random(6));
                $expense->expense_number = "EXP-{$date}-{$random}";
            }
        });
    }
}
