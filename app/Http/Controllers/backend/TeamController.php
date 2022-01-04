<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Models\backend\team;
use Illuminate\Http\Request;
use File;

class TeamController extends Controller
{

    public function index()
    {
        $teams = team::orderby('id', 'desc')->get();
        return view('backend.pages.team.index_team')->with('teams', $teams);
    }
    // =======Show service in Page====


    public function create()
    {
        return view('backend.pages.team.create_team');
    }
    // Create service from Page

    public function edit($id)
    {
        $team = team::find($id);
        return view('backend.pages.team.edit_team')->with('team', $team);
    }
    // Edit the service

    public function store(Request $request)
    {
        $request->validate([
            'avatar'        => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'name'          => 'nullable',
            'department'    => 'nullable',
            'facebook'      => 'nullable',
            'facebook_link'      => 'nullable',
            'linkedin'      => 'nullable',
            'linkedin_link'      => 'nullable',
            'twitter'       => 'nullable',
            'twitter_link'       => 'nullable',
            'instagram'     => 'nullable',
            'instagram_link'     => 'nullable',
            'github'     => 'nullable',
            'github_link'     => 'nullable',
        ]);

        $team = new team;

        $team->name = $request->name;
        $team->department = $request->department;
        $team->facebook = $request->facebook;
        $team->facebook_link = $request->facebook_link;
        $team->linkedin = $request->linkedin;
        $team->linkedin_link = $request->linkedin_link;
        $team->twitter = $request->twitter;
        $team->twitter_link = $request->twitter_link;
        $team->instagram = $request->instagram;
        $team->instagram_link = $request->instagram_link;
        $team->github = $request->github;
        $team->github_link = $request->github_link;
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
            $team->image = $imageName;
            // display image
            // {{ asset('images/'.$about->image) }}
        }
        }
        // Store full Post
        $team->save();

        return redirect()->route('team')->with('message','Post Publish Successfully');


    }
    //  Post service into database

    public function update (Request $request, $id)
    {
        $request->validate([
            'avatar'        => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'name'          => 'nullable',
            'department'    => 'nullable',
            'facebook'      => 'nullable',
            'facebook_link'      => 'nullable',
            'linkedin'      => 'nullable',
            'linkedin_link'      => 'nullable',
            'twitter'       => 'nullable',
            'twitter_link'       => 'nullable',
            'instagram'     => 'nullable',
            'instagram_link'     => 'nullable',
            'github'     => 'nullable',
            'github_link'     => 'nullable',
        ]);

        $team = team::find($id);

        $team->name = $request->name;
        $team->department = $request->department;
        $team->facebook = $request->facebook;
        $team->facebook_link = $request->facebook_link;
        $team->linkedin = $request->linkedin;
        $team->linkedin_link = $request->linkedin_link;
        $team->twitter = $request->twitter;
        $team->twitter_link = $request->twitter_link;
        $team->instagram = $request->instagram;
        $team->instagram_link = $request->instagram_link;
        $team->github = $request->github;
        $team->github_link = $request->github_link;
        if ($request->file('image')) {
        if (count(array($request->image)) > 0) {
            // Delet Old Image Link
            if (File::exists('images/'.$team->image)) {
                File::delete('images/'.$team->image);
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
            $team->image = $imageName;
            // display image
            // {{ asset('images/'.$about->image) }}
        }
        }
        // Store full Post
        $team->save();

        return redirect()->route('team')->with('message','Post Update Successfully');
    }
    //  Update service into database

    public function delete($id)
    {
        $team = team::find($id);
        if (!is_null($about)) {
            // Delet Old Image Link
             if (File::exists('images/'.$team->image)) {
                File::delete('images/'.$team->image);
            }
            $team->delete();
        }
        return redirect()->route('team')->with('message','Post Delete Successfully');


    }
}
