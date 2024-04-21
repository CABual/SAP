<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    use HasFactory;

    protected $fillable = [
        'position',
        'last_name',
        'first_name',
        'middle_name',
        'suffix',
        'birthday',
        'birthplace',
        'civil_status',
        'gender',
        'mobile_number',
    ];
}
