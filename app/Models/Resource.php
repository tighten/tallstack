<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Resource extends Model
{
    use HasFactory;

    protected $casts = [
        'approved' => 'boolean',
    ];

    protected $fillable = ['title', 'slug', 'url', 'image', 'description', 'approved'];
    
}
