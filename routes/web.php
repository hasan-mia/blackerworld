<?php

use Illuminate\Support\Facades\Route;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

/*
|--------------------------------------------------------------------------
| Frontend Routes   /  All Frontend Pages Route
|--------------------------------------------------------------------------
*/

Route::group(['prefix' => '/'], function(){
	//All Main Pages Routes
    Route::get('/', 'frontend\Frontendcontroller@index')->name('index');
    Route::get('404', 'frontend\Frontendcontroller@error')->name('error');
    Route::get('about', 'frontend\Frontendcontroller@about')->name('about');
    Route::get('comming-soon', 'frontend\Frontendcontroller@commingsoon')->name('comming-soon');
    Route::get('contact', 'frontend\Frontendcontroller@contact')->name('contact');
    Route::get('faq', 'frontend\Frontendcontroller@faq')->name('faq');
    Route::get('privacy-policy', 'frontend\Frontendcontroller@privacrypolicy')->name('privacy-policy');
    Route::get('terms-condition', 'frontend\Frontendcontroller@termscondition')->name('terms-condition');
    Route::get('testimonials', 'frontend\Frontendcontroller@testimonial')->name('testimonials');

    // Blog all Category route
    Route::get('blog/category', 'frontend\Frontendcontroller@AllBlogCategories')->name('blog-categories');
    Route::get('/blog/category/{slug?}', 'backend\BlogCategoryController@ShowBlogCategoryPost')->name('show.blog-categories');

    //  Blog show & slug Route
    Route::get('blog', 'frontend\Frontendcontroller@blog')->name('blog');
    Route::get('/blog/{slug?}', 'backend\BlogController@show')->name('show.blog');
    // Blog Search
    Route::get('/blogsearch', 'frontend\Frontendcontroller@blogsearch')->name('blogsearch');

    //  Product show & slug Route
    Route::get('product', 'frontend\Frontendcontroller@product')->name('product');
    Route::get('/product/show', 'frontend\Frontendcontroller@show')->name('show.product');
    Route::get('/cart', 'frontend\Frontendcontroller@cart')->name('cart.product');
    Route::get('/wishlist', 'frontend\Frontendcontroller@wishlist')->name('wishlist.product');
    Route::get('/checkout', 'frontend\Frontendcontroller@checkout')->name('checkout.product');
    // Product Search
    Route::get('/search', 'frontend\Frontendcontroller@productsearch')->name('productsearch');

    //  Soluton slug Route
    Route::get('/solution/{slug?}', 'backend\SolutionController@show')->name('show.solution');

    // All Frontend Demo
    Route::get('demo', 'frontend\Frontendcontroller@demo')->name('demo');



});

/*
|--------------------------------------------------------------------------
| Backend Routes   /  All Backend Route
|--------------------------------------------------------------------------
*/
Route::group(['prefix' => 'admin'], function(){
	//=================All Admin Pages Route==================
    Route::get('/', 'backend\Backendcontroller@index')->name('admin');

    // Banner Route
    Route::group(['prefix' => '/banner'], function(){
    Route::get('/', 'backend\Bannercontroller@index')->name('banner');
    Route::get('/create', 'backend\Bannercontroller@create')->name('create.banner');
    Route::get('/edit{id}', 'backend\Bannercontroller@edit')->name('edit.banner');

    Route::post('/store', 'backend\Bannercontroller@store')->name('store.banner');

    Route::post('/banner/edit{id}', 'backend\Bannercontroller@update')->name('update.banner');
    Route::post('/banner/delete/{id}', 'backend\Bannercontroller@delete')->name('delete.banner');
    });

    // service Route
    Route::group(['prefix' => '/service'], function(){
    Route::get('/', 'backend\ServiceController@index')->name('service');
    Route::get('/create', 'backend\ServiceController@create')->name('create.service');
    Route::get('/edit{id}', 'backend\ServiceController@edit')->name('edit.service');

    Route::post('/store', 'backend\ServiceController@store')->name('store.service');

    Route::post('/service/edit{id}', 'backend\ServiceController@update')->name('update.service');
    Route::post('/service/delete/{id}', 'backend\ServiceController@delete')->name('delete.service');
    });

    // About us Route
    Route::group(['prefix' => '/about'], function(){
    Route::get('/', 'backend\AboutController@index')->name('admin.about');
    Route::get('/create', 'backend\AboutController@create')->name('create.about');
    Route::get('/edit{id}', 'backend\AboutController@edit')->name('edit.about');

    Route::post('/store', 'backend\AboutController@store')->name('store.about');

    Route::post('/about/edit{id}', 'backend\AboutController@update')->name('update.about');
    Route::post('/about/delete/{id}', 'backend\AboutController@delete')->name('delete.about');
    });

    // About us Route
    Route::group(['prefix' => '/whychoseus'], function(){
    Route::get('/', 'backend\WhychoseusController@index')->name('whychoseus');
    Route::get('/create', 'backend\WhychoseusController@create')->name('create.whychoseus');
    Route::get('/edit{id}', 'backend\WhychoseusController@edit')->name('edit.whychoseus');

    Route::post('/store', 'backend\WhychoseusController@store')->name('store.whychoseus');

    Route::post('/whychoseus/edit{id}', 'backend\WhychoseusController@update')->name('update.whychoseus');
    Route::post('/whychoseus/delete/{id}', 'backend\WhychoseusController@delete')->name('delete.whychoseus');
    });

    // Team Route
    Route::group(['prefix' => '/team'], function(){
    Route::get('/', 'backend\TeamController@index')->name('team');
    Route::get('/create', 'backend\TeamController@create')->name('create.team');
    Route::get('/edit{id}', 'backend\TeamController@edit')->name('edit.team');

    Route::post('/store', 'backend\TeamController@store')->name('store.team');

    Route::post('/team/edit{id}', 'backend\TeamController@update')->name('update.team');
    Route::post('/team/delete/{id}', 'backend\TeamController@delete')->name('delete.team');
    });

    // Solution Route
    Route::group(['prefix' => '/solution'], function(){
    Route::get('/', 'backend\SolutionController@index')->name('solution');

    Route::get('/create', 'backend\SolutionController@create')->name('create.solution');
    Route::get('/edit{id}', 'backend\SolutionController@edit')->name('edit.solution');

    Route::post('/store', 'backend\SolutionController@store')->name('store.solution');

    Route::post('/solution/edit{id}', 'backend\SolutionController@update')->name('update.solution');
    Route::post('/solution/delete/{id}', 'backend\SolutionController@delete')->name('delete.solution');

    });

    // Blogs Category Route
    Route::group(['prefix' => '/blog-category'], function(){
    Route::get('/', 'backend\BlogCategoryController@index')->name('admin.blog-category');

    Route::get('/create', 'backend\BlogCategoryController@create')->name('create.blog-category');
    Route::get('/edit{id}', 'backend\BlogCategoryController@edit')->name('edit.blog-category');

    Route::post('/store', 'backend\BlogCategoryController@store')->name('store.blog-category');

    Route::post('/blog-category/edit{id}', 'backend\BlogCategoryController@update')->name('update.blog-category');
    Route::post('/blog-category/delete/{id}', 'backend\BlogCategoryController@delete')->name('delete.blog-category');

    });

    // Blogs Route
    Route::group(['prefix' => '/blog'], function(){
    Route::get('/', 'backend\BlogController@index')->name('admin.blog');

    Route::get('/create', 'backend\BlogController@create')->name('create.blog');
    Route::get('/edit{id}', 'backend\BlogController@edit')->name('edit.blog');

    Route::post('/store', 'backend\BlogController@store')->name('store.blog');

    Route::post('/blog/edit{id}', 'backend\BlogController@update')->name('update.blog');
    Route::post('/blog/delete/{id}', 'backend\BlogController@delete')->name('delete.blog');

    });

    // Product Category Route
    Route::group(['prefix' => '/product-category'], function(){
    Route::get('/', 'backend\ProductCategoryController@index')->name('admin.product-category');

    Route::get('/create', 'backend\ProductCategoryController@create')->name('create.product-category');
    Route::get('/edit{id}', 'backend\ProductCategoryController@edit')->name('edit.product-category');

    Route::post('/store', 'backend\ProductCategoryController@store')->name('store.product-category');

    Route::post('/product-category/edit{id}', 'backend\ProductCategoryController@update')->name('update.product-category');
    Route::post('/product-category/delete/{id}', 'backend\ProductCategoryController@delete')->name('delete.product-category');

    });

    // Product Brand Route
    Route::group(['prefix' => '/brand'], function(){
    Route::get('/', 'backend\ProductBrandController@index')->name('admin.brand');

    Route::get('/create', 'backend\ProductBrandController@create')->name('create.brand');
    Route::get('/edit{id}', 'backend\ProductBrandController@edit')->name('edit.brand');

    Route::post('/store', 'backend\ProductBrandController@store')->name('store.brand');

    Route::post('/brand/edit{id}', 'backend\ProductBrandController@update')->name('update.brand');
    Route::post('/brand/delete/{id}', 'backend\ProductBrandController@delete')->name('delete.brand');

    });

    // Product Admin Route
    Route::group(['prefix' => '/product'], function(){
    Route::get('/', 'backend\ProductController@index')->name('admin.product');

    Route::get('/create', 'backend\ProductController@create')->name('create.product');
    Route::get('/edit{id}', 'backend\ProductController@edit')->name('edit.product');

    Route::post('/store', 'backend\ProductController@store')->name('store.product');

    Route::post('/product/edit{id}', 'backend\ProductController@update')->name('update.product');
    Route::post('/product/delete/{id}', 'backend\ProductController@delete')->name('delete.product');

    });

    // Clear Cache route
    Route::get('/clear', function() {
        $run = Artisan::call('route:cache');
        $run = Artisan::call('view:cache');
        $run = Artisan::call('config:cache');
        return 'FINISHED';
    });


});

Auth::routes();

Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('admin/', [App\Http\Controllers\HomeController::class, 'adminHome'])->name('admin.home')->middleware('is_admin');
