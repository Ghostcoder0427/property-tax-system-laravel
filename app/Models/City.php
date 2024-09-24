<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class City extends Model
{
    use HasFactory;
    protected $fillable = ['name'];

    public function barangays(): HasMany
    {
        return $this->hasMany(Barangay::class, 'city_municipality_code', 'city_minucipality_code');
    }

    public function provinces(): BelongsTo
    {
        return $this->belongsTo(Province::class, 'province_code', 'province_code');
    }
}
