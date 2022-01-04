<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
// Connect Models
use App\Models\backend\service;

class ServiceController extends Controller
{

    public function index()
    {
        $services = service::orderby('id', 'desc')->get();
        return view('backend.pages.services.index_service')->with('services', $services);
    }
    // =======Show service in Page====


    public function create()
    {
        return view('backend.pages.services.create_service');
    }
    // Create service from Page

    public function edit($id)
    {
        $service = service::find($id);
        return view('backend.pages.services.edit_service')->with('service', $service);
    }
    // Edit the service

    public function store(Request $request)
    {
        $request->validate([
            'icon'         => 'required|max:150',
            'title'        => 'required|max:150',
            'paragraph'    => 'required',
        ]);

        $service = new service;
        $service->icon = $request->icon;
        $service->title = $request->title;
        $service->paragraph = $request->paragraph;
        $service->save();

        return redirect()->route('service')->with('message','Post Publish Successfully');

    }
    //  Post service into database

    public function update (Request $request, $id)
    {
        $request->validate([
            'icon'         => 'required|max:150',
            'title'        => 'required|max:150',
            'paragraph'    => 'required',
        ]);

        $service = service::find($id);

        $service->icon = $request->icon;
        $service->title = $request->title;
        $service->paragraph = $request->paragraph;
        $service->save();

        return redirect()->route('service')->with('message','Post Update Successfully');

    }
    //  Update service into database

    public function delete($id)
    {
        $service = service::find($id);
        if (!is_null($service)) {
            $service->delete();
        }
        return redirect()->route('service')->with('message','Post Delete Successfully');


    }
}
