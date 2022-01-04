<?php

namespace App\Models\backend;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Http\Controllers\backend\Frontendcontroller;
use App\Http\Controllers\backend\ProductBrandController;


class ProductBrand extends Model
{
    use HasFactory;
    public function products()
    {
      return $this->hasMany(product::class, 'cat_id');
    }
}
