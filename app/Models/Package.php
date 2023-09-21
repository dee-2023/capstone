<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Package extends Model
{
    protected $casts = [
        'inclusions' => 'array',
    ];

    protected $fillable = [
        'title',
        'description',
        'images_path',
        'price',
        'inclusions'
    ];
}
