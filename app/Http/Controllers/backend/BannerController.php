<?php

namespace App\Http\Controllers\backend;

// Connet Controllers
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
// Connet Models
use App\Models\backend\banner;


class BannerController extends Controller
{

    public function index()
    {
        $banners = banner::orderby('id', 'desc')->get();
        return view('backend.pages.banner.index_banner')->with('banners', $banners);
    }
    // =======Show Banner in Page====


    public function create()
    {
        return view('backend.pages.banner.create_banner');
    }
    // Create Banner from Page

    public function edit($id)
    {
        $banner = banner::find($id);
        return view('backend.pages.banner.edit_banner')->with('banner', $banner);
    }
    // Edit the Banner

    public function store(Request $request)
    {
        $request->validate([
            'meta'         => 'required|max:150',
            'title'        => 'required',
            'paragraph'    => 'required',
            'link'         => 'required',
            'youtubelink'  => 'required',
        ]);

        $banner = new banner;
        $banner->meta = $request->meta;
        $banner->title = $request->title;
        $banner->paragraph = $request->paragraph;
        $banner->link = $request->link;
        $banner->youtubelink = $request->youtubelink;
        $banner->save();

        return redirect()->route('banner')->with('message','Post Publish Successfully');

    }
    //  Post Banner into database

    public function update (Request $request, $id)
    {
        $request->validate([
            'meta'         => 'required|max:150',
            'title'        => 'required',
            'paragraph'    => 'required',
            'link'         => 'required',
            'youtubelink'  => 'required',
        ]);

        $banner = banner::find($id);

        $banner->meta = $request->meta;
        $banner->title = $request->title;
        $banner->paragraph = $request->paragraph;
        $banner->link = $request->link;
        $banner->youtubelink = $request->youtubelink;
        $banner->save();

        return redirect()->route('banner')->with('message','Post Update Successfully');
    }
    //  Update Banner into database

    public function delete($id)
    {
        $banner = banner::find($id);
        if (!is_null($banner)) {
            $banner->delete();
        }
        return redirect()->route('banner')->with('message','Post Delete Successfully');


    }
}
