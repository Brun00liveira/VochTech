<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Brand extends Model
{
    use HasFactory;

    protected $table = 'brands';

    // Define os campos que podem ser preenchidos em massa
    protected $fillable = [
        'name',
        'economic_groups_id',
    ];

    public function economicGroup()
    {
        return $this->belongsTo(EconomicGroup::class, 'economic_groups_id');
    }

    public function units()
    {
        return $this->hasMany(Unit::class, 'brand_id');
    }
}
