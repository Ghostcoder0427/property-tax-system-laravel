<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Region extends Model
{
    use HasFactory;
    protected $fillable = ['region_description'];
    public function provinces(): HasMany
    {
        return $this->hasMany(Province::class, 'region_code', 'region_code');
    }
}
