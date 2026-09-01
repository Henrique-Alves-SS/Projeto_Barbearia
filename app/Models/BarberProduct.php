<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BarberProduct extends Model
{
    use HasFactory;

    protected $table = 'produtos';

    protected $fillable = [
        'name',
        'category',
        'sku',
        'stock',
        'cost_price',
        'sale_price',
        'is_active',
    ];

    protected $casts = [
        'cost_price' => 'decimal:2',
        'sale_price' => 'decimal:2',
        'is_active' => 'boolean',
    ];
}
