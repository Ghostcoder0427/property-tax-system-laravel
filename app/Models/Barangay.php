<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Barangay extends Model
{
    use HasFactory;

    protected $fillable = ['name'];


    public function provinces(): BelongsTo
    {
        return $this->belongsTo(City::class, 'city_municipality_code', 'city_municipality_code');
    }
}
