<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class BarberAppointment extends Model
{
    use HasFactory;

    protected $table = 'agendamentos';

    protected $fillable = [
        'client_id',
        'employee_id',
        'service_id',
        'scheduled_at',
        'status',
        'total_price',
        'notes',
    ];

    protected $casts = [
        'scheduled_at' => 'datetime',
        'total_price' => 'decimal:2',
    ];

    public function client(): BelongsTo
    {
        return $this->belongsTo(BarberClient::class, 'client_id');
    }

    public function employee(): BelongsTo
    {
        return $this->belongsTo(BarberEmployee::class, 'employee_id');
    }

    public function service(): BelongsTo
    {
        return $this->belongsTo(BarberService::class, 'service_id');
    }
}
