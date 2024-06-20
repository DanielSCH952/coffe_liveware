<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sale extends Model
{
    use HasFactory;

    public function user()
    {
        return $this->hasOne(User::class);
    }
    public function order()
    {
        return $this->hasOne(Order::class);
    }
    public function employee()
    {
        return $this->hasOne(StoreEmployee::class);
    }
}
