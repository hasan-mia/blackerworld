<?php

namespace App\Models\backend;
use App\Http\Controllers\backend\BlogController;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class blog extends Model
{
    use HasFactory;
    protected $dates = ['created_at','updated_at','deleted_at'];

    public function BlogCategory()
    {
      return $this->belongsTo(BlogCategory::class, 'cat_id'); // foreign key
    }
















    // connect blog post to category
    // public function categories()
    // {
    //     return $this->belongsToMany('App\Models\backend\BlogCategory')->withTimestamps();
    // }

    // public function comments()
    // {
    //     return $this->hasMany('App\Models\backend\Comment');
    // }

    // public function images()
    // {
    //   return $this->hasMany(ProductImage::class);
    // }

    // public function brand()
    // {
    //   return $this->belongsTo(Brand::class);
    // }


}
