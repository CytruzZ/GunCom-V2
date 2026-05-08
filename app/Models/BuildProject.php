<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BuildProject extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'kit_name',
        'grade',
        'percentage',
        'status',
        'image',
    ];

    protected $casts = [
        'image' => 'array',
    ];
}
