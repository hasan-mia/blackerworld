<?php

namespace App\Http\Controllers\backend;
use App\Models\backend\ProductCategory;
use App\Http\Controllers\Controller;
use App\Models\backend\product;
use Illuminate\Http\Request;
use File;
use Image;
use DB;
class ProductController extends Controller
{
    // public function __construct()
    // {
    //   $this->middleware('auth:admin');
    // }

    public function index()
    {
         $products = product::with('ProductCategory')->orderby('id','desc')->get();
        // $categoryName = DB::table('products')
    	// 		->join('product_categories','products.cat_id','product_categories.id')
    	// 		->select('products.*','product_categories.name')
    	// 		->get();
        //  return $categoryName;

      return view('backend.pages.product.index_product', compact('products'));
    }

    public function create()
    {
        return view('backend.pages.product.create_product');
    }

    public function edit($id)
    {
      $product = product::find($id);
      return view('backend.pages.product.edit_product', compact('product'));
    }


    public function store(Request $request)
    {

      $request->validate([
        'title'         => 'required|max:150',
        'description'     => 'required',
        'price'             => 'required|numeric',
        'quantity'             => 'required|numeric',
        'cat_id'             => 'required|numeric',
        'brand_id'             => 'required|numeric',
      ]);



      $product = new product;

      $product->title = $request->title;
      $product->slug = str_slug($request->title);
      $product->description = $request->description;
      $product->price = $request->price;
      $product->offer = $request->offer;
      $product->quantity = $request->quantity;
      $product->cat_id = $request->cat_id;
      $product->brand_id = $request->brand_id;
      $product->user_id = 1;

        if ($request->file('image')) {
            if (count(array($request->image)) > 0) {
                // Insert new image
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
                $product->image = $imageName;
                // display image
                // {{ asset('images/'.$about->image) }}
            }
        }

        $product->save();

        return redirect()->route('admin.product')->with('message','Product Added Successfully');
    }

    public function update(Request $request, $id)
    {

        $request->validate([
            'title'         => 'required|max:150',
            'description'     => 'required',
            'price'             => 'required|numeric',
            'quantity'             => 'required|numeric',
            'cat_id'             => 'required|numeric',
            'brand_id'             => 'required|numeric',
          ]);

      $product = product::find($id);

      $product->title = $request->title;
      $product->slug = str_slug($request->title);
      $product->description = $request->description;
      $product->price = $request->price;
      $product->offer = $request->offer;
      $product->quantity = $request->quantity;
      $product->cat_id = $request->cat_id;
      $product->brand_id = $request->brand_id;
      $product->user_id = 1;

    if ($request->file('image')) {

      if (count(array($request->image)) > 0) {
        // Delet Old Image Link if have
        if (File::exists('images/'.$product->image)) {
            File::delete('images/'.$product->image);
        }

       // Insert new image
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
       $product->image = $imageName;
        // display image
        // {{ asset('images/'.$about->image) }}

    }
    }

    $product->save();

    return redirect()->route('admin.product')->with('message','Product Update Successfully');
    }

    public function delete($id)
    {
      $product = product::find($id);
      if (!is_null($product)) {
        if (File::exists('images/'.$product->image)) {
            File::delete('images/'.$product->image);
        }
        $product->delete();
      }
      return redirect()->route('admin.product')->with('error','Product Deleted Successfully');


    }
  }
