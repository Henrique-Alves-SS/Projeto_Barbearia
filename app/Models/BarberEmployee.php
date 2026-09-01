<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class BarberEmployee extends Model
{
    use HasFactory;

    protected $table = 'funcionarios';

    protected $fillable = [
        'name',
        'role',
        'phone',
        'email',
        'is_active',
    ];

    protected $casts = [
        'is_active' => 'boolean',
    ];

    public function appointments(): HasMany
    {
        return $this->hasMany(BarberAppointment::class, 'employee_id');
    }
}
