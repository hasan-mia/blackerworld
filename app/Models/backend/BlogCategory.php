<?php

namespace App\Models\backend;
use App\Http\Controllers\backend\BlogCategoryController;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BlogCategory extends Model
{
    use HasFactory;

    public $fillable = ['name', 'slug'];

    // Connect category to blog model/cateogry
    public function blogs()
    {
      return $this->hasMany(blog::class);
    }
}
