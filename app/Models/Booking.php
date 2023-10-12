<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Booking extends Model
{
    protected $casts = [
        'inclusions' => 'array',
    ];
    public function package()
    {
        return $this->belongsTo(Package::class, 'package_id');
    }

 
}
 