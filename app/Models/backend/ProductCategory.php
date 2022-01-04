<?php

namespace App\Models\backend;
use App\Http\Controllers\backend\ProductCategoryController;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
// use App\Http\Controllers\backend\Frontendcontroller;

class ProductCategory extends Model
{
    use HasFactory;
    public function products()
    {
      return $this->hasMany(product::class);
    }
}
