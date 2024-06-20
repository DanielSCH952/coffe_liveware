<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    public function OrdersDetails()
    {
        return $this->belongsTo(OrderDetails::class);
    }

    public function categories()
    {
        return $this->hasMany(CategoriesProduct::class)->categories();
    }
    public function evalution()
    {
        return $this->hasMany(Evaluation::class);
    }
    public function likes()
    {
        return $this->hasMany(Like::class);
    }
    public function getByStore()
    {
        return $this->belongsTo(StoreProductAvailability::class);
    }
}
