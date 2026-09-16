<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Categoria extends Model
{
    protected $table = '_categoria';

    protected $fillable = [
        'nome',
        'descricao',
    ];
}
