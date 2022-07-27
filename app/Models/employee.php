<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class employee extends Model
{
    protected $fillable = [
        'Name',
        'LastName',
        'DocumentType',
        'DocumentNumber',
        'PhoneNumber',
        'BaseSalary',
        'SalaryDay',
        'Position',
        'Department',
        'EPS',
        'AFP',
        'ARL',
        'Status',
    ];


   /* public function getFullNameAttribute()
    {
        return "{$this->name} {$this->lastname}";
    } */
}
