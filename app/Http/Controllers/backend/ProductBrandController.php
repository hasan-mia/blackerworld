<?php

namespace App\Http\Controllers\backend;
use App\Http\Controllers\Controller;
use App\Models\backend\ProductBrand;
use Illuminate\Http\Request;
use File;
use Image;

class ProductBrandController extends Controller
{

    public function index()
    {
        $ProductBrands = ProductBrand::orderby('id', 'desc')->get();
        // return $ProductBrands;
        return view('backend.pages.product.brand.index_brand', compact('ProductBrands'));
    }
    // =======Show blog in Page====


    public function create()
    {
        return view('backend.pages.product.brand.create_brand');
    }

    public function edit($id)
    {
        $ProductBrand = ProductBrand::find($id);
        return view('backend.pages.product.brand.edit_brand', compact('ProductBrand'));
    }
    // Edit the blog

    public function store(Request $request)
    {
        $request->validate([
            'image'        => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'name'          => 'nullable',
            'description'    => 'nullable',

        ]);

        $ProductBrand = new ProductBrand;

        $ProductBrand->name = $request->name;
        $ProductBrand->description = $request->description;
        if ($request->file('image')) {
        if (count(array($request->image)) > 0) {
            $image = $request->file('image');
            // Get image name with extention
            $originalName = $image->getClientOriginalName();
            // get name without extention
            $onlyName=explode('.',$originalName)[0];
            // Get image with extension
            $image_extension = $image->extension();
            // Rename the image
            $imageName = $onlyName.'_'.time().'.'.$image_extension;
            // Image path
            $location = public_path('images/' .$imageName);
            // Store image into folder
            Image::make($image)->save($location);
            // Store image into database
            $ProductBrand->image = $imageName;
            // display image
            // {{ asset('images/'.$about->image) }}
        }
        }
        // Store full Post
        $ProductBrand->save();

        return redirect()->route('admin.brand')->with('message','Category Create Successfully');


    }
    //  Post blog into database

    public function update (Request $request, $id)
    {
        $request->validate([
            'image'        => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'name'          => 'nullable',
            'description'    => 'nullable',
        ]);

        $ProductBrand = ProductBrand::find($id);

        $ProductBrand->name = $request->name;
        $ProductBrand->description = $request->description;
        if ($request->file('image')) {
        if (count(array($request->image)) > 0) {
            // Delet Old Image Link
            if (File::exists('images/'.$ProductBrand->image)) {
                File::delete('images/'.$ProductBrand->image);
            }
            $image = $request->file('image');
            // Get image name with extention
            $originalName = $image->getClientOriginalName();
            // get name without extention
            $onlyName=explode('.',$originalName)[0];
            // Get image with extension
            $image_extension = $image->extension();
            // Rename the image
            $imageName = $onlyName.'_'.time().'.'.$image_extension;
            // Image path
            $location = public_path('images/' .$imageName);
            // Store image into folder
            Image::make($image)->save($location);
            // Store image into database
            $ProductBrand->image = $imageName;
            // display image
            // {{ asset('images/'.$about->image) }}
        }
        }
        // Store full Post
        $ProductBrand->save();

        return redirect()->route('admin.brand')->with('success', 'Category successfully uploaded!');
    }
    //  Update ProductBrand into database

    public function delete($id)
    {
        $ProductBrand = ProductBrand::find($id);
        if (!is_null($ProductBrand)) {
            // Delet Old Image Link
             if (File::exists('images/'.$ProductBrand->image)) {
                File::delete('images/'.$ProductBrand->image);
            }
            $ProductBrand->delete();
        }
        return redirect()->route('admin.brand')->with('error', 'Category successfully Deleted! ');

    }

    //====================End Backend===================

    // public function ShowBlogCategoryPost ($id)
    // {
    //     // Category wise Blog
    //     $blogs = blog::with('BlogCategory')->where('cat_id', $id)->paginate(8);
    //     $BlogCategories = BlogCategory::all();
    //     $recent_posts = blog::orderby('id','desc')->limit(5)->get();
    //     $archives = blog::selectRaw('year(created_at) year, monthname (created_at) month, count(*) published')
    //         ->groupBy('year', 'month')
    //         ->orderByRaw('min(created_at) desc')
    //         ->get()
    //         ->toArray();
    //     return view('frontend.pages.blog.cat.post-blog-cat', compact('blogs', 'BlogCategories', 'recent_posts', 'archives'));
    // }
   // Display Categorywise Blog Post

}
