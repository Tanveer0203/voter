<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Voter extends Model
{
    use HasFactory;

    protected $casts = [
        'dob' => 'datetime', // Assuming 'dob' is the Date of Birth field
    ];

    protected $fillable = [
        'first_name',
        'last_name',
        'dob',
        'mobile',
        'email',
        'address',
        'district',
        'state',
    ];
}