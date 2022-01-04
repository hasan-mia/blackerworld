<?php

namespace App\Http\Controllers\backend;
use App\Http\Controllers\Controller;
use App\Models\backend\BlogCategory;
use App\Models\backend\blog;
use Illuminate\Http\Request;
use File;
use Image;

class BlogCategoryController extends Controller
{

    public function index()
    {
        $BlogCategories = BlogCategory::orderby('id', 'desc')->get();
        // return $BlogCategories;
        return view('backend.pages.blog.cat.index_blog_cat')->with('BlogCategories', $BlogCategories);
    }
    // =======Show blog in Page====


    public function create()
    {
        return view('backend.pages.blog.cat.create_blog_cat');
    }

    public function edit($id)
    {
        $BlogCategory = BlogCategory::find($id);
        return view('backend.pages.blog.cat.edit_blog_cat', compact('BlogCategory'));
    }
    // Edit the blog

    public function store(Request $request)
    {
        $request->validate([
            'image'        => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'name'          => 'nullable',
            'description'    => 'nullable',

        ]);

        $BlogCategory = new BlogCategory;

        $BlogCategory->name = $request->name;
        $BlogCategory->description = $request->description;
        $BlogCategory->slug = str_slug( $request->name);
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
            $BlogCategory->image = $imageName;
            // display image
            // {{ asset('images/'.$about->image) }}
        }
        }
        // Store full Post
        $BlogCategory->save();

        return redirect()->route('admin.blog-category')->with('message','Category Create Successfully');


    }
    //  Post blog into database

    public function update (Request $request, $id)
    {
        $request->validate([
            'image'        => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'name'          => 'nullable',
            'description'    => 'nullable',
        ]);

        $BlogCategory = BlogCategory::find($id);

        $BlogCategory->name = $request->name;
        $BlogCategory->description = $request->description;
        $BlogCategory->slug = str_slug( $request->name);

        if ($request->file('image')) {
        if (count(array($request->image)) > 0) {
            // Delet Old Image Link
            if (File::exists('images/'.$BlogCategory->image)) {
                File::delete('images/'.$BlogCategory->image);
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
            $BlogCategory->image = $imageName;
            // display image
            // {{ asset('images/'.$about->image) }}
        }
        }
        // Store full Post
        $BlogCategory->save();

        return redirect()->route('admin.blog-category')->with('success', 'Category successfully uploaded!');
    }
    //  Update BlogCategory into database

    public function delete($id)
    {
        $BlogCategory = BlogCategory::find($id);
        if (!is_null($BlogCategory)) {
            // Delet Old Image Link
             if (File::exists('images/'.$BlogCategory->image)) {
                File::delete('images/'.$BlogCategory->image);
            }
            $BlogCategory->delete();
        }
        return redirect()->route('admin.blog-category')->with('error', 'Category successfully Deleted! ');

    }

    //====================End Backend===================

    public function ShowBlogCategoryPost ($id)
    {
        // Category wise Blog
        $blogs = blog::with('BlogCategory')->where('cat_id', $id)->paginate(8);
        $BlogCategories = BlogCategory::all();
        $recent_posts = blog::orderby('id','desc')->limit(5)->get();
        $archives = blog::selectRaw('year(created_at) year, monthname (created_at) month, count(*) published')
            ->groupBy('year', 'month')
            ->orderByRaw('min(created_at) desc')
            ->get()
            ->toArray();
        return view('frontend.pages.blog.cat.post-blog-cat', compact('blogs', 'BlogCategories', 'recent_posts', 'archives'));
    }
   // Display Categorywise Blog Post

}


