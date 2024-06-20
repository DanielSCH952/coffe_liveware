<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Municipality extends Model
{
    use HasFactory;

    public function state()
    {
        return $this->hasOne(State::class);
    }

    public function adresess()
    {
        return $this->belongsTo(Adress::class);
    }
}
