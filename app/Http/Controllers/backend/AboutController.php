<?php

namespace App\Http\Controllers\backend;

use App\Models\backend\about;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Image;
use File;

class AboutController extends Controller
{

    public function index()
    {
        $abouts = about::orderby('id', 'desc')->get();
        return view('backend.pages.about.index_about')->with('abouts', $abouts);
    }
    // =======Show service in Page====


    public function create()
    {
        return view('backend.pages.about.create_about');
    }
    // Create service from Page

    public function edit($id)
    {
        $about = about::find($id);
        return view('backend.pages.about.edit_about')->with('about', $about);
    }
    // Edit the service

    public function store(Request $request)
    {
        $request->validate([
            'image'        => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'description'  => 'nullable',
            'experience'   => 'nullable',
            'whyus'        => 'nullable',
            'approach'     => 'nullable',
        ]);
        $about = new about;

        $about->description = $request->description;
        $about->experience = $request->experience;
        $about->whyus = $request->whyus;
        $about->approach = $request->approach;

        //insert images also
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
            $about->image = $imageName;
        }
        }
        // Store full Post
        $about->save();

        return redirect()->route('admin.about')->with('message','Post Publish Successfully');


    }
    //  Post service into database

    public function update (Request $request, $id)
    {
        $request->validate([
            'image'        => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'description'  => 'nullable',
            'experience'   => 'nullable',
            'whyus'        => 'nullable',
            'approach'     => 'nullable',
        ]);

        $about = about::find($id);

        $about->description = $request->description;
        $about->experience = $request->experience;
        $about->whyus = $request->whyus;
        $about->approach = $request->approach;

        if ($request->file('image')) {
        if (count(array($request->image)) > 0) {
            // Delet Old Image Link
            if (File::exists('images/'.$about->image)) {
                File::delete('images/'.$about->image);
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
            $about->image = $imageName;
            // display image
            // {{ asset('images/'.$about->image) }}
        }
        }
        // Store full Post
        $about->save();

        return redirect()->route('admin.about')->with('message','Post Update Successfully');

    }
    //  Update service into database

    public function delete($id)
    {
        $about = about::find($id);
        if (!is_null($about)) {
            // Delet Old Image Link
             if (File::exists('images/'.$about->image)) {
                File::delete('images/'.$about->image);
            }
            $about->delete();
        }

        return redirect()->route('admin.about')->with('message','Post Delete Successfully');


    }
}

