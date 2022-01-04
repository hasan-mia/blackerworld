<?php

namespace App\Http\Controllers\frontend;

// namespace Carbon;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

// Connect Database
use Illuminate\Support\Facades\DB;

//  Banner
use App\Models\frontend\BannerModels;

// Blog Model
use App\Models\backend\BlogCategory;
use App\Models\backend\blog;

// Product Model
use App\Models\backend\ProductCategory;
use App\Models\backend\product;

class Frontendcontroller extends Controller
{
    //------Page Controler Functions------
    public function index()
    {
        return view('frontend.index');
    }
    //-----end index page------
    public function error()
    {
    return view('frontend.pages.404');
    }
    //-----end error page------
    public function about()
    {
    return view('frontend.pages.about');
    }
    //-----end about page------
    public function commingsoon()
    {
    return view('frontend.pages.coming-soon');
    }
    //-----end comming soon page------
    public function contact()
    {
    return view('frontend.pages.contact');
    }
    //-----end contact page------
    public function faq()
    {
    return view('frontend.pages.faq');
    }
    //-----end faq page------
    public function privacrypolicy()
    {
    return view('frontend.pages.privacy-policy');
    }
    //-----end privacry policy page------
    public function termscondition()
    {
    return view('frontend.pages.terms-condition');
    }
    //-----end terms condition page------
    public function testimonial()
    {
    return view('frontend.pages.terms-testimonials');
    }
    //-----end terms testimonial page------


    // =============================================================//
    //               Product Frontend Controller                    //
    //==============================================================//

    public function product()
    {
    $products = product::with('ProductCategory')->orderby('id','desc')->paginate(8);
    $ProductCategories = ProductCategory::all();
    // $recent_posts = blog::orderby('id','desc')->limit(5)->get();
    // $archives = blog::selectRaw('year(created_at) year, monthname (created_at) month, count(*) published')
    //     ->groupBy('year', 'month')
    //     ->orderByRaw('min(created_at) desc')
    //     ->get()
    //     ->toArray();
    return view('frontend.pages.product.product', compact('products', 'ProductCategories'));
    }
    //-----end Product index------

    public function show(){
         // product
        //  $product = blog::with('ProductCategory')->where('slug', $slug)->first();
         // categories
        //  $ProductCategories = ProductCategory::all();
        return view('frontend.pages.product.show');
    }

    public function cart(){
        // product
        // $product = blog::with('ProductCategory')->where('slug', $slug)->first();
       return view('frontend.pages.product.cart');
    }

    public function wishlist(){
        // product
        // $product = blog::with('ProductCategory')->where('slug', $slug)->first();
        return view('frontend.pages.product.wishlist');
    }

    public function checkout(){
        // product
        // $product = blog::with('ProductCategory')->where('slug', $slug)->first();
        return view('frontend.pages.product.checkout');
    }

    public function productsearch(Request $request)
    {
      $productsearch = $request->productsearch;

        $products = product::orWhere('title', 'like', '%'.$productsearch.'%')
        ->orWhere('description', 'like', '%'.$productsearch.'%')
        ->orWhere('slug', 'like', '%'.$productsearch.'%')
        ->orderBy('id', 'desc')
        ->paginate(8);

        return view('frontend.pages.product.search', compact('productsearch', 'products'));
    }

    // End Product Search

    // =============================================================//
    //                  Blog Frontend Controller                    //
    //==============================================================//
    public function AllBlogCategories(){
        $BlogCategories = BlogCategory::orderby('id','desc')->paginate(8);
        return view('frontend.pages.blog.cat.index_blog_categories', compact('BlogCategories'));
    }

    // Frontend All Blog Category

    public function blog()
    {
    $blogs = blog::with('BlogCategory')->orderby('id','desc')->paginate(8);
    $BlogCategories = BlogCategory::all();
    $recent_posts = blog::orderby('id','desc')->limit(5)->get();
    $archives = blog::selectRaw('year(created_at) year, monthname (created_at) month, count(*) published')
        ->groupBy('year', 'month')
        ->orderByRaw('min(created_at) desc')
        ->get()
        ->toArray();
    return view('frontend.pages.blog.index-blog', compact('blogs', 'BlogCategories', 'recent_posts', 'archives'));
    }
    //-----end Blog------

    public function blogsearch(Request $request)
    {
      $blogsearch = $request->blogsearch;

        $blogs = blog::orWhere('title', 'like', '%'.$blogsearch.'%')
        ->orWhere('description', 'like', '%'.$blogsearch.'%')
        ->orWhere('slug', 'like', '%'.$blogsearch.'%')
        ->orderBy('id', 'desc')
        ->paginate(8);

        return view('frontend.pages.blog.search-blog', compact('blogsearch', 'blogs'));
    }

    // End Search


    public function demo()
    {
    return view('frontend.welcome');
    }
    //-----end demo------
}
