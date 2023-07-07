<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Staff extends Model
{
    use HasFactory;

    protected $fillable = [
        'staff_number',
        'image',
        'first_name',
        'middle_name',
        'last_name',
        'email_address',
        'telephone_number',
        'date_of_birth',
        'address',
        'position',
        'working_hours',
        'salary'
    ];
}