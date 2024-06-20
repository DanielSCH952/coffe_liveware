<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;

    public function status()
    {
        return $this->hasOne(OrderStatus::class);
    }
    public function user()
    {
        return $this->hasOne(User::class);
    }
    public function store()
    {
        return $this->hasOne(Store::class);
    }

    public function orders()
    {
        return $this->belongsTo(OrderDetails::class);
    }

    public function sales()
    {
        return $this->belongsTo(Sale::class);
    }
}
