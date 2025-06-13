<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;

class Schedule extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'description',
        'type',
        'scheduled_at',
        'completed_at',
        'status',
        'priority',
        'field_id',
        'crop_id',
        'assigned_to',
        'created_by',
        'notes',
    ];

    protected $casts = [
        'scheduled_at' => 'datetime',
        'completed_at' => 'datetime',
        'notes' => 'array',
    ];

    public function field()
    {
        return $this->belongsTo(Field::class);
    }

    public function crop()
    {
        return $this->belongsTo(Crop::class);
    }

    public function assignedTo()
    {
        return $this->belongsTo(User::class, 'assigned_to');
    }

    public function createdBy()
    {
        return $this->belongsTo(User::class, 'created_by');
    }

    public function scopeUpcoming($query)
    {
        return $query->where('scheduled_at', '>', now())
                    ->where('status', '!=', 'completed');
    }

    public function scopeOverdue($query)
    {
        return $query->where('scheduled_at', '<', now())
                    ->where('status', '!=', 'completed');
    }

    public function isOverdue()
    {
        return $this->scheduled_at < now() && $this->status !== 'completed';
    }
}
