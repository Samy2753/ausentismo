<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class absenteeism extends Model
{
    use HasFactory;
    protected $fillable = [
        'NameEmployee',
        'DocumentType',
        'DocumentNumber',
        'Start_date',
        'End_date',
        'Incapacity_type_id',
        'Clasification',
    ];
    protected $casts = [
        'Start_date' => 'datetime',
        'End_date' => 'datetime',
    ];
    protected $appends = [
        'NameEmployee',
    ];
}
