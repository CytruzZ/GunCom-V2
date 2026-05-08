<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Showcase extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'image',
        'description',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function likedByUsers()
    {
        return $this->hasMany(ShowcaseLike::class);
    }

    public function comments()
    {
        return $this->hasMany(ShowcaseComment::class);
    }
}
