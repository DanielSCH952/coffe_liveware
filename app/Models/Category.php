<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    public function type_category()
    {
        return $this->hasOne(CategoryType::class);
    }

    public function products()
    {
        return $this->hasMany(CategoriesProduct::class)->products();
    }
}
