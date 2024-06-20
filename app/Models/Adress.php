<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Adress extends Model
{
    use HasFactory;

    public function municipality(): HasOne
    {
        return $this->hasOne(Municipality::class);
    }

    public function store()
    {
        return $this->belongsTo(Store::class);
    }
}
