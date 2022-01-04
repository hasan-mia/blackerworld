<?php

namespace App\Http\Controllers\backend;

// Connet Controllers
use App\Http\Controllers\Controller;
// connect model
use App\Models\backend\whychoseus;
use Illuminate\Http\Request;


class WhychoseusController extends Controller
{

    public function index()
    {
        $whychoseuses = whychoseus::orderby('id', 'desc')->get();
        return view('backend.pages.whychoseus.index_whychoseus')->with('whychoseuses', $whychoseuses);
    }
    // =======Show service in Page====


    public function create()
    {
        return view('backend.pages.whychoseus.create_whychoseus');
    }
    // Create service from Page

    public function edit($id)
    {
        $whychoseus = whychoseus::find($id);
        return view('backend.pages.whychoseus.edit_whychoseus')->with('whychoseus', $whychoseus);
    }
    // Edit the service

    public function store(Request $request)
    {
        $request->validate([
            'icon'         => 'nullable|max:250',
            'title'        => 'nullable|max:250',
            'description'  => 'nullable',
            'number'       => 'nullable'
        ]);

        $whychoseus = new whychoseus;

        $whychoseus->icon = $request->icon;
        $whychoseus->title = $request->title;
        $whychoseus->description = $request->description;
        $whychoseus->number = $request->number;
        $whychoseus->save();

        return redirect()->route('whychoseus')->with('message','Post Publish Successfully');


    }
    //  Post whychoseus into database

    public function update (Request $request, $id)
    {
        $request->validate([
            'icon'         => 'nullable|max:250',
            'title'        => 'nullable|max:250',
            'description'  => 'nullable',
            'number'       => 'nullable'
        ]);

        $whychoseus = whychoseus::find($id);

        $whychoseus->icon = $request->icon;
        $whychoseus->title = $request->title;
        $whychoseus->description = $request->description;
        $whychoseus->number = $request->number;
        $whychoseus->save();

        return redirect()->route('whychoseus')->with('message','Post Update Successfully');
    }
    //  Update whychoseus into database

    public function delete($id)
    {
        $whychoseus = whychoseus::find($id);
        if (!is_null($whychoseus)) {
            $whychoseus->delete();
        }

        return redirect()->route('whychoseus')->with('message','Post Delete Successfully');


    }
}
