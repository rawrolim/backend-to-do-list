<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class lista extends Model
{
    use HasFactory;

    protected $fillable = [
        'descricao',
        'data',
        'status',
        'user_id',
    ];
}
