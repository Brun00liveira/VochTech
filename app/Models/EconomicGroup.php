<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EconomicGroup extends Model
{
    use HasFactory;

    protected $table = 'economic_groups';

    protected $fillable = ['name'];

    public $timestamps = true;

    public function brands()
    {
        return $this->hasMany(Brand::class, 'economic_groups_id');
    }


}

