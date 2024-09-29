<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Applicant extends Model
{
    use HasFactory;

    protected $fillable = [
        'first_name',
        'last_name',
        'middle_name',
        'sex',
        'dob',
        'region_code',
        'province_code',
        'city_municipality_code',
        'barangay_code',
        'house_number',
        'phone_number',
        'email',
        'password',
        'user_type',
        'valid_id',
        'documents',
    ];
}
