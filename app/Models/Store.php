<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Store extends Model
{
    use HasFactory;

    public function adress()
    {
        return $this->hasOne(Adress::class);
    }
    public function availabitiesProducts()
    {
        return $this->belongsTo(StoreProductAvailability::class);
    }
    public function employees()
    {
        return $this->hasMany(StoreEmployee::class);
    }
}
