<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;

use App\Models\backend\solution;
use Illuminate\Http\Request;
use Image;
use File;

class SolutionController extends Controller
{

    public function index()
    {
        $solutions = solution::orderby('id', 'desc')->get();
        return view('backend.pages.solution.index_solution')->with('solutions', $solutions);
    }
    // =======Show Solution in Page====


    public function create()
    {
        return view('backend.pages.solution.create_solution');
    }

    public function show($slug)
    {
        $solution = solution::where('slug', $slug)->first();
        return view('frontend.pages.solution.show', compact('solution'));
    }

    public function edit($id)
    {
        $solution = solution::find($id);
        return view('backend.pages.solution.edit_solution')->with('solution', $solution);
    }
    // Edit the Solution

    public function store(Request $request)
    {
        $request->validate([
            'image'        => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'title'          => 'nullable',
            'description'    => 'nullable',
            'short_description'    => 'nullable',

        ]);

        $solution = new solution;

        $solution->title = $request->title;
        $solution->short_description = $request->short_description;
        $solution->description = $request->description;
        $solution->slug = str_slug( $request->title);

        $solution->admin_id = 1;
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
            $solution->image = $imageName;
            // display image
            // {{ asset('images/'.$about->image) }}
        }
        }
        // Store full Post
        $solution->save();

        return redirect()->route('solution')->with('message','Post Publish Successfully');


    }
    //  Post Solution into database

    public function update (Request $request, $id)
    {
        $request->validate([
            'image'        => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'title'          => 'nullable',
            'description'    => 'nullable',
            'short_description'    => 'nullable',
        ]);

        $solution = solution::find($id);

        $solution->title = $request->title;
        $solution->short_description = $request->short_description;
        $solution->description = $request->description;
        $solution->slug = str_slug( $request->title);

        $solution->admin_id = 1;

        if (count(array($request->image)) > 0) {
            // Delet Old Image Link
            if (File::exists('images/'.$solution->image)) {
                File::delete('images/'.$solution->image);
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
            $solution->image = $imageName;
            // display image
            // {{ asset('images/'.$about->image) }}
        }
        // Store full Post
        $solution->save();

        return redirect()->route('solution')->with('message','Post Update Successfully');
    }
    //  Update Solution into database

    public function delete($id)
    {
        $solution = solution::find($id);
        if (!is_null($solution)) {
            // Delet Old Image Link
             if (File::exists('images/'.$solution->image)) {
                File::delete('images/'.$solution->image);
            }
            $solution->delete();
        }
        return redirect()->route('solution')->with('message','Post Delete Successfully');

    }
}
