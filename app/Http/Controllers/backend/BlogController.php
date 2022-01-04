<?php
// namespace Carbon;
namespace App\Http\Controllers\backend;
use App\Models\backend\BlogCategory;

use App\Http\Controllers\Controller;
use App\Models\backend\blog;
use Illuminate\Http\Request;
use Image;
use File;
class BlogController extends Controller
{

    public function index()
    {
        $blogs = blog::with('BlogCategory')->orderby('id','desc')->get();
        // return $blogs;
        return view('backend.pages.blog.index_blog', compact('blogs'));
    }
    // =======Show blog in Page====


    public function create()
    {
        $BlogCategories = BlogCategory::all();
        // $tags = Tag::all();
        return view('backend.pages.blog.create_blog',compact('BlogCategories'));
    }
    // Create blog

    public function edit($id)
    {
        $blog = blog::find($id);
        $BlogCategories = BlogCategory::all();
        return view('backend.pages.blog.edit_blog', compact('blog', 'BlogCategories'));
    }
    // Edit the blog

    public function store(Request $request)
    {
        $request->validate([
            'image'        => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'title'          => 'nullable',
            'description'    => 'nullable',
            // 'cat_id' => ['required', 'array', 'min:1'],
            // 'cat_id.*' => ['required', 'integer', 'exists:BlogCategories,id'],

        ]);

        $blog = new blog;

        $blog->title = $request->title;
        $blog->description = $request->description;
        $blog->cat_id = $request->cat_id;
        $blog->slug = str_slug( $request->title);

        // if (count( $request->tags) > 0) {
        //     foreach ( $request->tags as $tag) {
        //     $blog->tags =  $request->tags;
        // }
        // }

        $blog->tags =  $request->tags;

        $blog->user_id = 1;
        // Image Insert
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
            $blog->image = $imageName;
            // display image
            // {{ asset('images/'.$about->image) }}
        }
        // Store full Post
        $blog->save();

        return redirect()->route('admin.blog')->with('message','Post Publish Successfully');


    }
    //  Post blog into database

    public function update (Request $request, $id)
    {
        $request->validate([
            'image'        => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'title'          => 'nullable',
            'description'    => 'nullable',
        ]);

        $blog = blog::find($id);

        $blog->title = $request->title;
        $blog->description = $request->description;
        $blog->cat_id = $request->cat_id;
        $blog->slug = str_slug( $request->title);
        $blog->tags =  $request->tags;
        $blog->user_id = 1;
        if ($request->file('image')) {
        if (count(array($request->image)) > 0) {
            // Delet Old Image Link
            if (File::exists('images/'.$blog->image)) {
                File::delete('images/'.$blog->image);
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
            $blog->image = $imageName;
            // display image
            // {{ asset('images/'.$about->image) }}
        }
        }
        // Store full Post
        $blog->save();
        return redirect()->route('admin.blog')->with('message','Post Update Successfully');
    }
    //  Update blog into database

    public function delete($id)
    {
        $blog = blog::find($id);
        if (!is_null($blog)) {
            // Delet Old Image Link
             if (File::exists('images/'.$blog->image)) {
                File::delete('images/'.$blog->image);
            }
            $blog->delete();
        }
        return redirect()->route('admin.blog')->with('error','Post Delete Successfully');


    }

    // =============End Backend================

    public function show($slug)
    {
        // blog
        $blog = blog::with('BlogCategory')->where('slug', $slug)->first();
        // categories
        $BlogCategories = BlogCategory::all();
        // tags
        $tags = blog::where('tags')->get()->toArray();;
        // recent post
        $recent_posts = blog::orderby('id','desc')->limit(5)->get();
        // archive
        $archives = blog::selectRaw('year(created_at) year, monthname (created_at) month, count(*) published')
        ->groupBy('year', 'month')
        ->orderByRaw('min(created_at) desc')
        ->get()
        ->toArray();

        return view('frontend.pages.blog.blog-details', compact('blog', 'BlogCategories', 'tags', 'recent_posts', 'archives'));
    }
    // Display Blog Details In Single Post with slug

}

