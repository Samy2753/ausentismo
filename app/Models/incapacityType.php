<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class incapacityType extends Model
{
    protected $fillable = [
        'IncapacityType',
        'star_date',
        'end_date',
    ];
}
