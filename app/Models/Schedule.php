<?php

namespace App\Models;

use App\Models\farms\Crop;
use App\Models\farms\Field;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;
use Illuminate\Container\Attributes\Auth;

class Schedule extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'assigned_to',
        'created_by',
        'title',
        'description',
        'type',
        'scheduled_at',
        'completed_at',
        'status',
        'priority',
        'crop_id',
        'notes',
        'field_id',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'scheduled_at' => 'datetime',
        'completed_at' => 'datetime',
        'notes' => 'array', // Mengubah JSON menjadi array secara otomatis
    ];

    /**
     * Otomatis mengisi 'created_by' saat jadwal baru dibuat.
     */
   

    // RELASI DATABASE

    /**
     * Relasi ke user yang membuat jadwal.
     */
    public function createdBy()
    {
        return $this->belongsTo(User::class, 'created_by');
    }

    /**
     * Relasi ke user yang ditugaskan.
     */
    public function assignedTo()
    {
        return $this->belongsTo(User::class, 'assigned_to');
    }

    /**
     * Relasi ke tanaman terkait.
     */
    public function crop()
    {
        return $this->belongsTo(Crop::class);
    }

    /**
     * Relasi ke lahan terkait.
     */
    public function field()
    {
        return $this->belongsTo(Field::class);
    }
}
