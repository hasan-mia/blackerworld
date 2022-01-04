<?php

namespace App\Http\Controllers\backend;
use App\Http\Controllers\Controller;
use App\Models\backend\ProductCategory;
use Illuminate\Http\Request;
use Image;
use File;

class ProductCategoryController extends Controller
{

    public function index()
    {
        $ProductCategories = ProductCategory::orderby('id', 'desc')->get();
        // return $BlogCategories;
        return view('backend.pages.product.cat.index_product_cat')->with('ProductCategories', $ProductCategories);
    }
    // =======Show blog in Page====


    public function create()
    {
        $main_categories = ProductCategory::orderBy('name', 'desc')->where('parent_id', NULL)->get();
        return view('backend.pages.product.cat.create_product_cat', compact('main_categories'));
    }

    public function edit($id)
    {
        $main_categories = ProductCategory::orderBy('name', 'desc')->where('parent_id', NULL)->get();
        $ProductCategory= ProductCategory::find($id);
        return view('backend.pages.product.cat.edit_product_cat', compact('main_categories','ProductCategory'));
    }
    // Edit the blog

    public function store(Request $request)
    {
        $this->validate($request, [
            'name'  => 'required',
            'image'  => 'nullable|image',
            'description'    => 'nullable',
          ],
          [
            'name.required'  => 'Please provide a category name',
            'image.image'  => 'Please provide a valid image with .jpg, .png, .gif, .jpeg exrension..',
          ]);

        $ProductCategory = new ProductCategory;

        $ProductCategory->name = $request->name;
        $ProductCategory->parent_id = $request->parent_id;
        $ProductCategory->description = $request->description;
        $ProductCategory->slug = str_slug( $request->name);

            //insert images also
            if ($request->file('image')) {
            if (count(array($request->image)) > 0) {
                $image = $request->file('image');
                //Get image name with extention
                $originalName = $image->getClientOriginalName();
                //get name without extention
                $onlyName=explode('.',$originalName)[0];
                //Get image with extension
                $image_extension = $image->extension();
                //Rename the image
                $imageName = $onlyName.'_'.time().'.'.$image_extension;
                //Image path
                $location = public_path('images/' .$imageName);
                //Store image into folder
                Image::make($image)->save($location);
                //Store image into database
                $ProductCategory->image = $imageName;
            }
        }
        // Store full Post
        $ProductCategory->save();

        return redirect()->route('admin.product-category')->with('message','Category Create Successfully');
    }
    //  Post blog into database

    public function update (Request $request, $id)
    {
        $this->validate($request, [
            'name'  => 'required',
            'image'  => 'nullable|image',
            'description'    => 'nullable',
          ],
          [
            'name.required'  => 'Please provide a category name',
            'image.image'  => 'Please provide a valid image with .jpg, .png, .gif, .jpeg exrension..',
          ]);

        $ProductCategory= ProductCategory::find($id);

        $ProductCategory->name = $request->name;
        $ProductCategory->parent_id = $request->parent_id;
        $ProductCategory->description = $request->description;
        $ProductCategory->slug = str_slug( $request->name);
        if ($request->file('image')) {
        if (count(array($request->image)) > 0) {
            //Delete the old image from folder

              if (File::exists('images/'.$ProductCategory->image)) {
                File::delete('images/'.$ProductCategory->image);
              }

              $image = $request->file('image');
              //Get image name with extention
              $originalName = $image->getClientOriginalName();
              //get name without extention
              $onlyName=explode('.',$originalName)[0];
              //Get image with extension
              $image_extension = $image->extension();
              //Rename the image
              $imageName = $onlyName.'_'.time().'.'.$image_extension;
              //Image path
              $location = public_path('images/' .$imageName);
              //Store image into folder
              Image::make($image)->save($location);
              //Store image into database
              $ProductCategory->image = $imageName;
        }
        }

        // Store full Post
        $ProductCategory->save();

        return redirect()->route('admin.product-category')->with('success', 'Category successfully uploaded!');
    }
    //  Update BlogCategory into database

    public function delete($id)
    {


        $ProductCategory = ProductCategory::find($id);
        if (!is_null($ProductCategory)) {
            // If it is parent category, then delete all its sub category
            if ($ProductCategory->parent_id == NULL) {
              // Delete sub categories
              $sub_categories = ProductCategory::orderBy('name', 'desc')->where('parent_id', $ProductCategory->id)->get();

              foreach ($sub_categories as $sub) {
                // Delete category image
                if (File::exists('images/'.$sub->image)) {
                  File::delete('images/'.$sub->image);
                }
                $sub->delete();
              }

            }

            // Delete category image
            if (File::exists('images/'.$ProductCategory->image)) {
              File::delete('images/'.$ProductCategory->image);
            }
            $ProductCategory->delete();
          }
        return redirect()->route('admin.product-category')->with('error', 'Category successfully Deleted! ');

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
