<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Casts\Attribute;

class Resource extends Model
{
    use HasFactory;

    protected $casts = [
        'approved' => 'boolean',
    ];

    protected function image(): Attribute
    {
        return Attribute::make(
            get: fn ($value) => url('storage') . '/' . $value,
        );
    }

    protected $fillable = ['title', 'slug', 'url', 'image', 'description', 'approved'];
    
}
