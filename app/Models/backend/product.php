<?php

namespace App\Models\backend;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use App\Http\Controllers\backend\Frontendcontroller;
use App\Http\Controllers\Controller\ProductController;


class product extends Model
{
    use HasFactory;
    public function ProductCategory()
    {
      return $this->belongsTo(ProductCategory::class, 'cat_id');
    }

}
