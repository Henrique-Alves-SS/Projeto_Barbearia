<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class BarberClient extends Model
{
    use HasFactory;

    protected $table = 'clientes';

    protected $fillable = [
        'name',
        'phone',
        'email',
        'birth_date',
        'notes',
    ];

    protected $casts = [
        'birth_date' => 'date',
    ];

    public function appointments(): HasMany
    {
        return $this->hasMany(BarberAppointment::class, 'client_id');
    }
}
